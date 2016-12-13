<?php

// inloggningsuppgifter och databas 
$mysql_server = "localhost";
$mysql_user = "ab5520";
$mysql_password = "****************";
$mysql_database = "ab5520";

$conn = mysqli_connect($mysql_server, $mysql_user, $mysql_password);
// Check connection
if (!$conn) {
     die("Connection failed: " . mysql_error());
} 

$select_data= mysql_select_db($mysql_database, $conn);
 
?>