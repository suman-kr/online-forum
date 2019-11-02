<?php 
	if(!isset($_SESSION["fn"])) {
		header("location:index.php");
	}
?>

<span style="text-align:right ;width:90%; display:block; margin-bottom:5px;">
Welcome
<a href="uedit.php"><img src="data/images/usericon.jpg" class="imagedel">
	
<?php 
	echo $_SESSION["fn"];
?>

</a> &nbsp;&nbsp;&nbsp; [ <a href="logout.php">Logout</a> ] 
</span>
