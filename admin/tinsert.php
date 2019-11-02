<?php

session_start ();
require ("header.php");
require ("checkUser.php")?>
<script type="text/javascript">
function check(f) {
	if(f.tn.value=="") {
		document.getElementById("a").innerHTML="Please enter a name.";
		f.tn.focus();
		return false;
	} else if(f.tt.value=="") {
		document.getElementById("b").innerHTML="Please enter a topic type.";
		f.tt.focus();
		return false;
	} else {
	return true;
	}
}
</script>
<h3>Add a New Topic</h3>
<form action="tinsertH.php" method="POST" onsubmit="return check(this)">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="tn"><span id='a' style="color: red;"></span></td>
		</tr>
		<tr>
			<td>Topic Type:</td>
			<td><input type="text" name="tt"><span id='b' style="color: red;"></span></td>
		</tr>
		<tr>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>


<?php require("footer.php")?>