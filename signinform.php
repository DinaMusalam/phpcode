<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php include("header.php"); ?>
<?php 
include "conn.php"; // Databasanslutningen 

 
// Inloggning 
if (isset($_POST['submit'])){
	$username= $_POST['user'];
	$password= $_POST['pass'];
	$md5pass= md5($password);

   $sql = "SELECT id FROM user WHERE UserName='".mysql_real_escape_string($username)."' AND UserPassword='".mysql_real_escape_string($md5pass)."'";
   $result = mysql_query($sql);

   // Hittades inte användarnamn och lösenord 
   // skicka till formulär med felmeddelande 
   if (mysql_num_rows($result) == 0){
     header("Location: signinform.php?badlogin=");
     exit;
   }

   // Sätt sessionen med unikt index 
   $_SESSION['sess_id'] = mysql_result($result, 0);
   $_SESSION['sess_user'] = $_POST['user'];
   header("Location: profile.php");
   exit;
}

// Utloggning 
if (isset($_GET['logout'])){
   session_unset();
   session_destroy();
   header("Location: signinform.php");
   exit;
}

?>

<?php

// Om inte inloggad visa formulär, annars logga ut-länk 
if (!isset($_SESSION['sess_user'])){

   echo "<div id='logg'>Logga In</div>";

   // Visa felmeddelande vid felaktig inloggning 
   if (isset($_GET['badlogin'])){
      echo "<div id='fel'>Fel användarnamn eller lösenord!<br>";
      echo "Försök igen!</div>\n";
   }

?>

<div id="signIn">

<form action="signinform.php" method="post" id="formSign">
Användarnamn:<br>
<input type="text" name="user"/><br>
Lösenord:<br>
<input type="password" name="pass"/><br>
<input type="submit" name="submit" value="Logga in" id="sign"/>
</form>
</div>

<?php

} else {

   echo "<a href=\"signinform.php?logout=\">Logga ut</a>\n";

}

?>
<?php
include("footer.php");
?>