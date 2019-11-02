<?php
	session_start();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
?>
<script type="text/javascript">
	document.getElementById("amessage").className="active";
</script>
<a href="search.php">Send Message</a>
<hr>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
<?php
$abc = $_SESSION['uid'];
$sql = "select a.fullname,b.chatdetail_id,b.cdatetime,b.message,b.chat_id,b.user_id FROM user a , chat b WHERE a.user_id IN(SELECT user_id from chat where chat_id IN(select chat_id from chatmaster WHERE user_id_to='$abc')) AND chat_id IN(select chat_id from chatmaster WHERE user_id_to='$abc')";

	$rows = mysqli_query($db,$sql);
	if(mysqli_num_rows($rows) < 1){
		echo "<h1>No messages Recieved.</h1>";
	}
	else{
		echo "<table>";
		echo "<tr><th>User ID</th><th>Name</th><th>Message</th></tr>";
	while ($row = mysqli_fetch_array($rows,MYSQLI_ASSOC)) {
		echo "<tr><td>".$row['user_id']."</td>";
		echo "<td>".$row['fullname']."</td>";
		echo "<td>".$row['message']."</td></tr>";
	}
echo "</table>";
}

	require("footer.php")
?>
