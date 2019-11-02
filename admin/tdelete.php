<?php

	session_start ();
	require ("utility.php");
	require ("header.php");
	require ("checkUser.php");
	
	$uid = $_GET ['id'];
	$qry = "DELETE FROM topic WHERE topic_id='" . $uid . "'";
	$result = ExecuteQuery ( $qry );
	
	if ($result) {
		
		header ( "location:topic.php" );
	} else {
		echo "Not Done";
	}
	
	require("footer.php")

?>