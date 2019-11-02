<?php
	session_start();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
?>
<script type="text/javascript">
	function check(f) {
		if (f.un.value == "") {
			document.getElementById("a").innerHTML = "Please enter a user name.";
			f.un.focus();
			return false;
		} else if (f.fn.value == "") {
			document.getElementById("b").innerHTML = "Please enter your name";
			f.fn.focus();
			return false;
		} else if (f.pwd.value == "") {
			document.getElementById("c").innerHTML = "Please enter a password.";
			f.pwd.focus();
			return false;
		} else if (f.e_mail.value == "") {
			document.getElementById("d").innerHTML = "Please enter an e-mail address.";
			f.e_mail.focus();
			return false;
		} else if (f.gender.value == "") {
			document.getElementById("e").innerHTML ="Please select your gender.";
			f.gender.focus();
			return false;
		} else if (f.dob.value == "") {
			document.getElementById("f").innerHTML ="Please enter your date of birth.";
			f.dob.focus();
			return false;
		} else if (f.add.value == "") {
			document.getElementById("i").innerHTML = "Please enter your physical address.";
			f.add.focus();
			return false;
		} else if (f.sta.value == "") {
			document.getElementById("j").innerHTML = "Please enter your state.";
			f.sta.focus();
			return false;
		} else if (f.cou.value == "") {
			document.getElementById("k").innerHTML = "Please enter your country.";
			f.cou.focus();
			return false;
		} else {
			return true;
		}
	}
</script>
<html>
<head></head>
<body>
<form action="upupdate.php" method="POST" onsubmit="return check(this)">
	<?php
		$sql="SELECT * from user where user_id=$_SESSION[uid]";

		$rows = mysqli_query($db,$sql);

		if (mysqli_num_rows($rows)>0) {
			$row = mysqli_fetch_array ($rows);
			echo "<table>";
			// echo "<tr><td>User Name</td><td> : </td><td><h4>$row[username]</h4></td></tr>";
			echo "<tr><td>User Name</td><td> : </td><td><input type='text' name='un' value='$row[username]' readonly = 'readonly'><span id='a' style='color: red'; ></span></td></tr>";
			echo "<tr><td>Full Name</td><td> : </td><td><input type='text' name='fn' value='$row[fullname]' ><span id='b' style='color: red';></span></td></tr>";
			echo "<tr><td>Password</td> <td> : </td><td><input type='password' name='pwd' value='$row[password]'><span id='c' style='color: red';></span></td></tr>";
			echo "<tr><td>E-Mail</td><td> :</td><td> <input type='email' name='e_mail' value='$row[e_mail]'><span id='d' style='color: red';></span></td></tr>";
			echo "<tr><td>Gender</td><td> :</td><td> <input type='radio' name='gender' value='1' checked='checked' >male<input type='radio' name='gender' >female<span id='e' style='color: red';></span></td></tr> ";
			echo "<tr><td>Date Of Birth</td> <td>: </td><td><input type='date' name='dob' value='$row[dob]'><span id='f' style='color: red';></span></td></tr>";
			// echo "<tr><td>Image</td><td>:</td><td> <input type='file' name='ima' value='$row[uimg]'></td></tr> ";
			// echo "<tr><td>Address</td><td> :</td><td> <textarea rows='3' cols='15' name='add' value='$row[address]'></textarea><span id='i' style='color: red';></span></td></tr>";
			echo "<tr><td>State</td><td> :</td><td> <input type='text' name='sta' value='$row[state]'><span id='j' style='color: red';></span></td></tr>";
			echo "<tr><td>Country</td><td> :</td><td><input type='text' name='cou' value='$row[country]'><span id='k' style='color: red';></span></td></tr>";
			echo "</table>";
			echo "<input type='submit' value='Update' name='submit'>";
			echo "<input type='reset' value='Reset'>";

		}
	?>
	<!-- <button type="submit" value="Submit" name="submit">Update</button>
	<button type="reset" value="Reset">Reset</button> -->
</form>
</body>
</html>
<?php require("footer.php")?>
