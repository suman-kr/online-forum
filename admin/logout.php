<?php 
	require("header.php");
	session_start();
	session_destroy();
?>

<h4>Logout Successful</h4>
<p>
	You have been logged out.<br>
	<a href="..\index.php">Click here</a> to return to the front page.
</p>

<?php require("footer.php");?>