<?php
	session_start ();
	require ("utility.php");
	require ("header.php");
	require ("checkUser.php");
	$id = $_GET ['id'];
	$str = "SELECT * FROM topic WHERE topic_id='" . $_GET ['id'] . "'";
	$result = ExecuteQuery ( $str );
	$row = mysql_fetch_array ( $result );
?>

<script type="text/javascript">
	function check(f) {
		if(f.tn.value=="") {
			document.getElementById("a").innerHTML="Please enter the topic name...";
			f.tn.focus();
			return false;
		} else if(f.tt.value=="") {
			document.getElementById("b").innerHTML="Please enter the topic type..";
			f.tt.focus();
			return false;
		} else {
			return true;
		}
	}
</script>
<h3>Edit Topic</h3>
<form action="tupdate.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">

	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="tn"
				value="<?php echo $row ['topic_name']?>"><span id='a' style="color: red;"></span>
			</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><input type="text" name="tt"
				value="<?php echo $row['topic_type'] ?>"><span id='b'
				style="color: red;"></span></td>
		</tr>
		<tr>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
<?php require("footer.php");?>
