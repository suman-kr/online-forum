<?php
	session_start();
	require("conn.php");
	require("header.php");
	require("checkUser.php");

	$sql="SELECT * from user where isuser=true";
	$rows=mysqli_query($db,$sql);

	if (mysqli_num_rows($rows)>0) {
		while ($row = mysqli_fetch_array ($rows)) {
			echo $row['fullname']."<br>";
		}
	}

	require("footer.php");
?>
