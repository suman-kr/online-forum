<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
	
	$sql="SELECT * from user where user_id=$_GET[id]";
	
	$rows=ExecuteQuery($sql);
	$row = mysql_fetch_array($rows);
?>
<script type="text/javascript">
	function check(f) {
		if(f.tt.value=="") {
			document.getElementById("a").innerHTML="Please enter a message";
			f.tt.focus();
			return false;
		} else {
			return true;
		}
	}
</script>

<form action="messageH.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" name="uto" value="<?php echo $_GET['id'] ?>">
	<table>
		<tr>
			<td>To: </td>
			<td><?php echo $row['fullname']; ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><textarea rows="3" cols="115" name="tt"></textarea><span id='a'
				style="color: red;"></span></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Send"></td>
		</tr>
	</table>
</form>
<br>


<?php require("footer.php")?>