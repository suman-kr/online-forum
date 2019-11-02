<?php session_start();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
	$stid = $_POST['stid'];
	$ta = $_POST['ta'];
	$hd=$_POST['head'];
	$uid = $_SESSION["uid"];

	$sql="INSERT INTO question ( `heading`,`question_detail`, `user_id`, `subtopic_id`) VALUES ( '$hd','$ta', '$uid', '$stid');";
	$result=mysqli_query($db,$sql);

	if ($result == 1) {
		header ("location:questions.php?id=$stid");
	}

	require("footer.php")
?>
