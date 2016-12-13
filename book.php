<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php 
include("header.php");
include ("conn.php");
?>

<div id="book">
	<div id="Tbook">
	Gästbok
	</div>
		<div id="newPost">
		Nytt Inlägg
		</div>
			<div id="felmsg"></div>
				<form action="#" id="gb">
					
						Namn:<br>
						<input type="text" id="name"/>
						<br>
						<br>
						Meddelande:<br>
						<input type="text" size="40" id="msg"/><br><br>
						<input type="button" value="Spara!" id="save"/>
					
				</form>
<div id="msgs">
	<?php
		$sql = mysql_query("SELECT * FROM gb ORDER BY id DESC LIMIT 5");
		while ($row = mysql_fetch_assoc($sql)){
				echo "<div id='n'>".$row['name']."</div>";
				echo "<div id='m'>".$row['message']."</div>";
				}
	?>

</div>
</div>


<?php
include("footer.php");
?>