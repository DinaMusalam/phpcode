<?php

// inloggningsuppgifter och databas 
$mysql_server = "localhost";
$mysql_user = "cs2013";
$mysql_password = "abc123";
$mysql_database = "cs2013";

 // Create connection
$conn = mysqli_connect($mysql_server, $mysql_user, $mysql_password);
// Check connection
if (!$conn) {
     die("Connection failed: " . mysql_error());
} 

$select_data= mysql_select_db($mysql_database, $conn);

?>