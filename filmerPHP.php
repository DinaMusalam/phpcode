<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<?php
include("header.php");
?>

<div id="left">

	</div>
	<div id="right">
		<div id="movie">
			<div id="rightHeader">Filmer</div>
			<div id="para">
			<div id="list">
			
			
				<?php include_once('filmer.php');?>
			  <div class="clear">
			</div>
		
		</div>
		</div>
		</div>
</div>
<?php
include("footer.php");
?>
		