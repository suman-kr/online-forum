<?php
	require("header.php");
	require("conn.php");
	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];

	if (isset($uid) && isset($pwd)) {
		$sql="select * from user where username='$uid' and password='$pwd'"	;
		// $result = ExecuteQuery($sql);
		$result = mysqli_query($db , $sql);
		if (mysqli_num_rows($result)==1) {
			$row = mysqli_fetch_array($result);
			$type = $row['u_type'];
			session_start();
			$_SESSION["uid"]= $row["user_id"];
			$_SESSION["fn"] = $row["fullname"];

			if($type==1) {
				header("location: admin/home.php");
			} else {
				header("location: home.php");
			}
		} else {
			header("location: index.php?act=invalid");
		}
	}

	require("footer.php");
?>
