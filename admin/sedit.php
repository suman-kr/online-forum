<?php 
	session_start();
	require("utility.php");
	require("header.php");
	$rows = ExecuteQuery ("SELECT topic_name, topic_id FROM Topic");
	require("checkUser.php");
	
	$id = $_GET['id'];
	$str = "SELECT * FROM subtopic WHERE subtopic_id='".$_GET['id']."'";
	$result =ExecuteQuery($str);
	$row = mysql_fetch_array($result);
?>
<script type="text/javascript">
	function check(f) {
		if(f.sn.value=="") {
			document.getElementById("a").innerHTML="Please enter the subtopic";
			f.sn.focus();
			return false;
		} else if(f.sd.value=="") {
			document.getElementById("b").innerHTML="Please enter the subtopic description";
			f.sd.focus();
			return false;
		} else if(f.ss.value=="") {
			document.getElementById("c").innerHTML="Please enter the status";
			f.ss.focus();
			return false;
		} else if(f.topic.value=="") {
			document.getElementById("d").innerHTML="Please enter the topic name..";
			f.topic,focus();
			return false;
		} else {
			return true;
		}
	}
</script>
<form action="supdate.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">

	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="sn"
				value="
				<?php echo $row ['subtopic_name']?>"><span id='a' style="color: red;"></span>
			</td>
		</tr>
		<tr>
			<td>Description: </td>
			<td><input type="text" name="sd"
				value="<?php echo $row['subtopic_description'] ?>"><span id='b'
				style="color: red;"></span></td>
		</tr>
		<tr>
			<td>Status:</td>
			<td><input type="text" name="ss"
				value="<?php echo $row['s_status']?>"><span id='c'
				style="color: red;"></span></td>
		</tr>
		<tr>
			<td>Topic:</td>
			<td><select name="topic">
	    		<?php
					while ( $row1 = mysql_fetch_array ( $rows ) ) {
						if ($row1 ["topic_id"] == $row ["topic_id"]) {
							echo "<option value='$row1[topic_id]' selected='selected'>$row1[topic_name]</option>";
						} else {
							echo "<option value='$row1[topic_id]'>$row1[topic_name]</option>";
						}
					}
				?>
    		</select><span id='d' style="color: red;"></span></td>
		</tr>
		<tr>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
<?php require("footer.php");?>
