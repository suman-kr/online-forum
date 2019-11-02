<?php
	session_start ();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
?>

<script type="text/javascript">
	function check(f) {
		if(f.ata.value=="") {
			document.getElementById("spuid").innerHTML = "Please enter a post.";
			f.ata.focus();
			return false;
		} else {
			return true;
		}
</script>

<?php
	$sql = "SELECT heading from question where question_id=$_GET[id]";
	$rows = mysqli_query($db, $sql );
	$row = mysqli_fetch_array ( $rows );
?>

<form action="answerH.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" value="<?php echo $_GET["id"] ?>" name="qid" >
	<table>
		<tr>
			<td><b>RE : <?php echo $row["heading"] ?></b></td>
		</tr>
		<tr>
			<td>Post:</td>
		</tr>
		<tr>
			<td><textarea rows="5" cols="125" name="ata"></textarea><span
				id='spuid' style="color: red;"></span></td>
		</tr>
		<tr>
			<td><input type="submit" value="Go"></td>
		</tr>
	</table>
</form>


<?php require("footer.php")?>
