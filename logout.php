<?php
	require("header.php");
	require("conn.php");
	session_start();
	// ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");
	session_destroy();
?>

<h4>Logout Successful</h4>
<p>
	You have been logged out.<br>
	<a href="index.php">Click here</a> to return to the front page.
</p>

<?php require("footer.php");?>
