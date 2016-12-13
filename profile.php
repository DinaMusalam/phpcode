<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php include("header.php"); ?>
<?php

// Kolla om inloggad = sessionen satt 
if (!isset($_SESSION['sess_user'])) {
   header("Location: signinform.php");
   exit;
}
?>

<div id="left">
	<div id="leftHeader">Lägga til en film</div>
		<div id="formDiv">
	      <div id="filmer">
		  
          <form action="filmerPHP.php" method="post">
			<div id="info"></div>
				<fieldset>
					<legend>Lägg till ny film </legend><br>
					Titel:<br>
					<input size="20" type="text" class="text" name="title" id="filmName"/><br>
					Betyg:<br>
					<select name="betyg" id="selectbox" class="text">
					<option value="">Välj betyg här:</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					</select><br>
					<label for="imdb">Länk till imdb:</label><br>
					<input size="20" type="text" class="text" name="imdb" id="imdb"/><br>
					<label for="bild">Länk till bild:</label><br>
					<input size="20" type="text" class="text" name="bild" id="bild"/><br>
					<label for="handling">Filmens handling:</label><br>
					<textarea rows="4" cols="30" name="handling" class="text" id="handling"></textarea><br>
					<input type="submit" class="buttons" value="Lägg till film" name="laggTill" id="laggTill"/><br>
			    </fieldset>
			</form>
			</div> 
		</div> 
	</div>

	<div id="profile">
<h2 id="welcome">Welcome : <i><?php echo $_SESSION['sess_user']; ?></i></h2>
<p> Välkommen till admin-sidan!</p>
<p> Du kan lägga till filmer till sidan "Filmer" i formuläret till vänster.</p>

<p id="logout"><a href="signinform.php?logout=">Logga ut</a></p>
</div>
		

<?php
include("footer.php");
?>
		