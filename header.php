<!DOCTYPE html>
<html lang="se">
<head>
<link rel="stylesheet" type="text/css" href="CSS.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.3.min.js">
</script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.6.3.min.js">
</script>

<script type="text/javascript" src="JS.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Filmsamling</title>
</head>
<body>
<?php session_start();?>

<div id="container">
	<div id="header">Mina Filmsamling</div>
		<div id="nav">
			<ol id="mainNav">
				<li class="chosen"><a href="index.php" <?php if ($page == 'index.php') { ?>class="active"<?php } ?>>Start</a></li>
				<li class="chosen"><a href="book.php" <?php if ($page == 'book.php') { ?>class="active"<?php } ?>>Gästbok</a></li>
				<li class="chosen"><a href="filmerPHP.php" <?php if ($page == 'filmerPHP.php') { ?>class="active"<?php } ?>>Filmer</a></li>
				<li class="chosen"><a href="filmTips.php" <?php if ($page == 'filmTips.php') { ?>class="active"<?php } ?>>Film tips</a></li>
				<li class="chosen"><a href="OmWebbplatsen.php" <?php if ($page == 'OmWebbplatsen.php') { ?>class="active"<?php } ?>>Om webbplatsen</a></li>
				<li class="chosen"><a href="kontakt.php" <?php if ($page == 'kontakt.php') { ?>class="active"<?php } ?>>Kontakt</a></li>
		<?php 
		if (!isset($_SESSION['sess_user'])) { ?>
			<li class="chosen"><a href="signinform.php" <?php if ($page == 'signinform.php') { ?>class="active"<?php } ?>>Logga in</a></li>
		<?php }?>
		<?php if (isset($_SESSION['sess_user'])) { ?>
			<li class="chosen"><a href="profile.php" <?php if ($page == 'profile.php') { ?>class="active"<?php } ?>>Admin</a></li>
		<?php } ?>
				
			</ol>
			
		</div>
		