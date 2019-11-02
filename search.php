<?php
	session_start();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
?>
<script type="text/javascript">
	function check(f) {
		if (f.utos.value == "") {
			document.getElementById("spuid").innerHTML="Please enter the name of the person with whom you would like to chat.";
			f.utos.focus();
			return false;
			} else {
				return true;
			}
	}
</script>
<form action="" method="post" onsubmit="return check(this)">
<h3>Search for User</h3>
	<table>
	<tr><td>Enter Name:</td>
		<td></td>
		<td> <input type="text" name="utos" ><span id='spuid' style="color: red;"></span></td>
	</tr>
	<tr></tr>
	<tr><td><input type="submit" value="Search" ></td></tr>
	</table>
</form>
<br>
<?php
	if (isset($_POST['utos'])) {
		$uto=$_POST['utos'];

		$sql="SELECT * FROM user WHERE fullname LIKE '$uto%'";
		$rows=mysqli_query($db,$sql);

		if (mysqli_num_rows($rows) > 0) {
			echo "<table cellpadding='2' cellspacing='2'>";

			while ($row = mysqli_fetch_array($rows)) {
				echo "<tr>";
				// echo "<td valign='top'><img src='$row[uimg]' alt='' style='height:100px; width:100px;' >";
				echo "<td valign='top'><a href=message.php?id=$row[user_id] style='font-weight:bold;'>$row[fullname]</a> <br>";
				echo ($row['gender'] == "M" ? "Male" : "Female")."<br>";
				echo $row['country'];
				echo "<br>";
				echo "<br>";
				echo "<a href=message.php?id=$row[user_id] style='font-weight:bold;'><input type='button' value='Send Message'></a>";
				echo "</tr>";
			}
			echo "</table>";
		}
	}
	require("footer.php")
?>
