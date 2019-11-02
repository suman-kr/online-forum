<?php
	session_start();
 	require("header.php");
	require("checkUser.php");
	require("conn.php");
?>
<script type="text/javascript">
	function check(f) {
		if(f.head.value=="") {
			document.getElementById("a").innerHTML="Please enter a title";
			f.head.focus();
			return false;
		} else if(f.ta.value=="") {
			document.getElementById("b").innerHTML="Please enter a question";
			f.ta.focus();
			return false;
		} else {
			   return true;
		}
	}
</script>

<form action="questionH.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" value="<?php echo $_GET["stid"] ?>" name="stid" >
	<table>
		<tr><td>Title:</td><tr>
		<tr><td>
			<textarea rows="1" cols="60" name="head"></textarea><span id='a' style="color: red;"></span>
		</td></tr>
		<tr><td>Post:</td><tr>
		<tr><td>
			<textarea rows="3" cols="115" name="ta" ></textarea><span id='b' style="color: red;"></span>
		</td></tr>
		<tr><td><input type="submit" value="Post">&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear"></td></tr>
	</table>
</form>


<?php require("footer.php"); ?>
