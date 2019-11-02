<?php
	session_start ();
	require("header.php");
	require("checkUser.php");
	require("../conn.php");
?>
<script type="text/javascript">
	document.getElementById("amessage").className="active";
</script>
<a href="search.php">Send Message</a>
<hr>

<?php

	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM Chatmaster,
		user WHERE chatmaster.user_id_to=user.user_id AND chatmaster.user_id_from=$_SESSION[uid]";
	$rows = mysqli_query($db,$sql);

	while($row = mysqli_fetch_array($rows)) {
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[fullname]</a>";

		$chatrow = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM chat WHERE chat_id=$row[chat_id]
				ORDER BY cdatetime DESC"));

		if ($chatrow) {
			echo "<br><br> $chatrow[message]";
		}
		echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'>";
	}

	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM Chatmaster, user WHERE chatmaster.user_id_from=user.user_id AND chatmaster.user_id_to=$_SESSION[uid]";
	$rows = mysqli_query($db,$sql);

	while ($row = mysqli_fetch_array($rows)) {
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[fullname]</a>";

		$chatrow = mysqli_fetch_array (mysqli_query ($db,"SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));

		if ($chatrow) {
			echo "<br><br> $chatrow[message]";
		}
		echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'>";
	}

	require("footer.php")
?>
