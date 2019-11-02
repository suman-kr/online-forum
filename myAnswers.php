<?php
	session_start();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
	echo "<h4>My Posts</h4>";

	$sql = "SELECT * from  answer,question where answer.user_id=$_SESSION[uid]
			and answer.question_id=question.question_id";
	$result = mysqli_query($db,$sql);

	if (mysqli_num_rows($result) == 0) {
		echo "You have no posts.<br><br>";
	} else {
		while ($row = mysqli_fetch_array($result)) {
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]'>
			<h4>$row[heading]</h4></a></span>";
			echo "</span>";
			echo "<br>";

			echo $row ['answer_detail'];
			echo "<br>";

			echo $row ['datetime'];
			echo "<br>";
			echo "<div class=line></div>";
		}
		echo "<br><br>";
	}
	echo "<a href='home.php'>Back</a>";
	require("footer.php");
?>
