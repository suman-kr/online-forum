<?php
	session_start ();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
?>

<script type="text/javascript">
	document.getElementById("home").className="active";
</script>

<h4>
	<a href="myQuestions.php">My Topics</a>
	<br><br>
	<a href="myAnswers.php">My Posts</a>
</h4>

<?php
	$sql = "select * from question,user where question.user_id=user.user_id ORDER BY
			datetime desc limit 0,5";

	$result = mysqli_query($db,$sql);

	while ( $row = mysqli_fetch_array ( $result ) ) {
// $qid=$row['question_id'];
// $query = "select question_id from question where question_detail='randa'";
		echo "<span class='box2'>";
		echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >
		$row[heading]</a></span>";

		echo "<table>";
		echo "<tr><td valign='top' width='100px'>
					<br>
				$row[fullname]
				<td valign='top'>
				$row[question_detail]<br><br>
				$row[datetime]
			<br><br>

				</td></tr>";

		echo "</table></span><div class='h10'></div>";
	}

	require("footer.php");
?>
