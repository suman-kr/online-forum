<?php

	session_start ();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
	$qid = $_POST ['qid'];
	$ata = $_POST ['ata'];
	$uid = $_SESSION ["uid"];
	$sql = "INSERT INTO answer(question_id,answer_detail,user_id)
		VALUES('$qid','$ata','$uid')";
	$result = mysqli_query($db, $sql );
	if ($result) {
		header ( "location:questionview.php?qid=$qid" );
	}

	require("footer.php")
?>
