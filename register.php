<?php  require("header.php"); ?>
<html>
<head>
	<script type="text/javascript">
		function check(form1) {
			if (form1.u_name.value == "" || form1.f_name.value == "" || form1.pwd.value == "" ||
				form1.e_mail.value == ""|| form1.gender.value == ""|| form1.dob.value == ""||
				 form1.sta.value == "" || form1.cou.value == "" ) {

				if (form1.u_name.value == "") {
					document.getElementById("a").innerHTML = "Please enter a user name.";
					form1.u_name.form1.focus();
				} else {
					document.getElementById("a").innerHTML = "";
					form1.u_name.focus();

				}
				if (form1.f_name.value == "") {
					document.getElementById("b").innerHTML = "Please enter your name.";
					form1.f_name.focus();
				} else {
					document.getElementById("b").innerHTML = "";
					form1.f_name.focus();
				}

				if (form1.pwd.value == "") {
					document.getElementById("c").innerHTML = "Please enter a password.";
					form1.pwd.focus();

				} else {
					document.getElementById("c").innerHTML = "";
					form1.pwd.focus();

				}

				if (form1.e_mail.value == "") {
					document.getElementById("d").innerHTML = "Please enter an e-mail address.";
					form1.e_mail.focus();
				} else {
					document.getElementById("d").innerHTML = "";
					form1.e_mail.focus();
				}

				if (form1.gender.value == "") {
					document.getElementById("spuid").innerHTML = "Please select your gender.";
					form1.gender.focus();
				} else {
					document.getElementById("spuid").innerHTML = "";
					form1.gender.focus();
				}

				if (form1.dob.value == ""){
					document.getElementById("e").innerHTML = "Please enter your date of birth.";
					form1.dob.focus();
				} else {
					document.getElementById("e").innerHTML = "";
					form1.dob.focus();
				}

				if (form1.add.value == "")
				{
					document.getElementById("f").innerHTML = "Please enter your physical address.";
					form1.add.focus();
				} else {
					document.getElementById("f").innerHTML = "";
					form1.add.focus();
				}

				if (form1.sta.value == "") {
					document.getElementById("g").innerHTML = "Please enter your state.";
					form1.sta.focus();
				} else {
					document.getElementById("g").innerHTML = "";
					form1.sta.focus();
				}

				if (form1.cou.value == "") {
					document.getElementById("h").innerHTML = "Please enter your country.";
					form1.cou.focus();
				} else {
					document.getElementById("h").innerHTML = "";
					form1.cou.focus();
				}

				return false;
			} else {
				return true;
			}
		}
	</script>
</head>
<body>
	<h1>User Registration</h1>
	<form action="registerH.php" method="post" onsubmit="return check(this)" name="form1">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="u_name"><span id='a' style="color: red;"></span></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="pwd"><span id='c'
					style="color: red;"></span></td>
			</tr>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="f_name"><span id='b' style="color: red;"></span></td>
			</tr>
			<tr>
				<td>E_Mail: </td>
				<td><input type="email" name="e_mail"><span id='d' style="color: red;"></span></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td><input type="radio" name="gender" value="M" checked="checked">Male
					<input type="radio" name="gender" value="F">Female<span id='spuid'
					style="color: red;"></span></td>
			</tr>
			<tr>
				<td>Birthday: </td>
				<td><input type="date" name="dob"><span id='e' style="color: red;"></span></td>
			</tr>
			<!-- <tr>
				<td>Profile Image: </td>
				<td><input type="file" name="ima"></td>
			</tr> -->
			<!-- <tr>
				<td>Address: </td>
				<td><textarea rows="3" cols="15" name="add"></textarea><span id='f'
					style="color: red;"></span></td>
			</tr> -->
			<tr>
				<td>State: </td>
				<td><input type="text" name="sta"><span id='g' style="color: red;"></span></td>
			</tr>
			<tr>
				<td>Country: </td>
				<td><input type="text" name="cou"><span id='h' style="color: red;"></span></td>
			</tr>

			<tr>
				<td><input type="submit" value="Submit"></td>
				<td><input type="reset" value="Reset"></td>
			</tr>
		</table>
	</form>
	<br><br>

</body>
</html>
<?php require("footer.php"); ?>
