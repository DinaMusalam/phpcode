<?php

include ("conn.php");
?>
<?php

if(isset($_GET['action']) && $_GET['action'] == "msg"){
	//Pull data from home.php front-end page
	$name = mysql_real_escape_string($_POST['name']);
	$msg = mysql_real_escape_string($_POST['msg']);
	 //Insert Data into mysql
	 
	if (!empty($name) && !empty($msg)){ 
	 
		$query = mysql_query("INSERT INTO gb(name,message) VALUES('$name','$msg')");		
		echo "true";
			}
	else{ echo "false"; 
		}
		}
?>