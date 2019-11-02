<?php 
	if(!isset($_SESSION["fn"]))
		header("location:./login.php");
?>

<span style="float:right">
Welcome
<a href="aedit.php"><img src="../data/images/usericon.jpg" class="imagedel">

<?php 
echo $_SESSION["fn"];
?>

</a> &nbsp;&nbsp;&nbsp; [ <a href="logout.php">Logout</a> ] 
</span>