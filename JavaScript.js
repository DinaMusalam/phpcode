$(document).ready(function(){
	$("#save").bind("click",function(){
		var postValues= $("#message").val();
		$.ajax({
			url:"server.php?action=message",
			type:"POST",
			data:{postValues: postValues},
			success: function(data){
				alert(data);
			},
			error:function(xhr,error){
			},
		});
	});

});
			