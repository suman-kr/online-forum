<?php 
	if(!isset($_SESSION["fn"])) {
		header("location:login.php");
	}
?>

<span style="float:right">
Welcome <?php echo $_SESSION["fn"];?>, [ <a href="logout.php">Logout</a> ] 
</span>