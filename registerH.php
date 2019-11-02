<?php
	ob_start();
	// require("utility.php");
	require("conn.php");
	$u_name=$_POST['u_name'];
	$f_name=$_POST['f_name'];
	$pwd=$_POST['pwd'];
	$e_mail=$_POST['e_mail'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$add=$_POST['add'];
	$sta=$_POST['sta'];
	$cou=$_POST['cou'];

	$ima = $_FILES['ima']['name'];
	$imup=$_FILES['ima']['tmp_name'];

	$path="user_images/$ima";
	move_uploaded_file($imup, $path);

	$sql=" INSERT INTO user (username,fullname,password,e_mail,gender,dob,state,country,u_type) values ('$u_name','$f_name','$pwd',
		'$e_mail','$gender','$dob','$sta','$cou',0)";
	$result=mysqli_query($db,$sql);

	if($result) {
		header("location:notification.php");
	} else {
		header("location:register.php");
	}
?>
