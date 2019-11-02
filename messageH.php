<?php
	session_start();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
	$uto=$_POST['uto'];
	$tt=$_POST['tt'];

	$sql="INSERT INTO chatmaster (user_id_from,user_id_to) values ($_SESSION[uid],$uto)";
	$result = mysqli_query($db,$sql);
	$sql = "SELECT MAX(chat_id) as cid FROM chatmaster";
	$row = mysqli_fetch_array (mysqli_query($db,$sql));
	$cid = $row['cid'];


	$sql="INSERT INTO chat (user_id, chat_id, message) values ($_SESSION[uid],$cid,'$tt')";

	$result += mysqli_query($db,$sql);

	if ($result == 2) {
		header("location:messaged.php");
	}
 	require("footer.php")
 ?>
