<?php require("header.php");?>

<script type="text/javascript">
function check(f) {
	if (f.uid.value == "") {
		document.getElementById("spuid").innerHTML = "Please enter your User ID.";
		f.uid.focus();
		return false;
	} else if (f.pwd.value == "") {
	document.getElementById("a").innerHTML = "Please enter your password";
		
		f.pwd.focus();
		return false;
	} else {
		return true;
	}
}
</script>
<form action="loginH.php" method="POST" onsubmit="return check(this)">
	<table>
		<tr>
			<td>User ID</td>
			<td>:</td>
			<td><input type="text" name="uid"><span id="spuid"
				style="color: red;"></span></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pwd"><span id="a"
				style="color: red;"></span></td>
		</tr>
		<tr>
			<td><input type="submit" value="Login"></td>
			<td></td>
			<td><input type="reset" value="Cancel"></td>
		</tr>
	</table>
	<?php
		if (isset ( $_GET ["act"] )) {
			if ($_GET ["act"] == "invalid") {
				echo "Invalid User Id / password";
			}
		}
	?>
</form>
<?php require("footer.php");?>