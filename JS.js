$(document).ready(function(){
		//------------------------toggle for the form -------------------------
		$("#newPost").click(function(){
			$("#gb").slideToggle("slow");
		});
		//------------------------validate forms-------------------------
  
		$("#filmName").focus();		
		$("#formDiv input[type='text'], #formDiv textarea").keypress(function(){
			if($(this).val() != ""){
				$(this).css({"border": "",
						"background": ""});
			}
		});
		
		$("#gb input[type='text']").keypress(function(){
			if($(this).val() != ""){
				$(this).css({"border": "",
						"background": ""});
			}
		});

		$("#selectbox").change(function(){
			$(this).focus();
			$(this).css({"border": "",
					"background": ""});
		  });
		  
		  
		$('#laggTill').click(function(e) {

				var isValid = true;
						
				$('.text').each(function() {
					if ($.trim($(this).val()) == '') {
					
						isValid = false;
						$(this).css({
							"border": "1px solid red",
						"background": "#FFCECE"
						});			
					}			
				});
				// Kontrollerar så att användaren har valt ett betyg i drop-down-listan
					if ($('#selectbox').val() == "") {
						isValid = false;
						$("#selectbox").css({
							"border": "1px solid red",
							"background": "#FFCECE"
						});
									
					}		
				
				$("#filmName").focus();
					
			if (isValid == false)
					e.preventDefault();
		});	
		
		//------------------------bildSpel-------------------------
		
	setInterval(function () { moveRight();}, 3000);
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

 
    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 50, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
			$( "slider" ).fadeIn( 3000, function() {
				$( "slider ul" ).fadeIn( 100 );
  });
			
        });
    };

//------------------------jquery -------------------------	
	
	$("#save").click(function(){
		//Get values of the input fields and store it into the variables.

		if ($('#name').val() == "") {
						isValid = false;
						$("#name").css({
							"border": "1px solid red",
							"background": "#FFCECE"
						});
		}
		
		if ($('#msg').val() == "") {
						isValid = false;
						$("#msg").css({
							"border": "1px solid red",
							"background": "#FFCECE"
						});
		}
		
		var name=$("#name").val();
		var msg=$("#msg").val();
		
					
		$.ajax({
			url:"server.php?action=msg",
			type:"POST",
			data:{name: name, msg: msg},
			success: function(data){
				if(data == "true"){
					
					$("#msgs").prepend("<div id='m'> "+ msg + "</div>");
					$("#msgs").prepend("<div id='n'> "+ name + "</div>");
					$("#name,#msg").val('');
					
					
				}
				else{
					alert("Du måste fylla i texten!");
					}
			},
			error:function(xhr,error){
				alert ("Kunde inte ansluta till server-filen");
				},
		});
		
	});					
});
		  
