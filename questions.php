<?php session_start();
	require("header.php");
	require("checkUser.php");
	require("conn.php");
	$id=$_GET["id"];
?>

<a href="question.php?stid=<?php echo $id ?>">Post New Thread</a>
<hr>
<?php

	$str="SELECT * FROM question, user WHERE question.user_id=user.user_id and subtopic_id=$id";
	$result=mysqli_query($db,$str);

	$no_rows = mysqli_num_rows($result);

	if ($no_rows > 0) {
		while($row = mysqli_fetch_array($result)) {
			$rowsc=mysqli_query($db,"SELECT count(*) as counter from answer where question_id=$row[question_id]");
			$rowc = mysqli_fetch_array($rowsc);
			$count = $rowc['counter'];

			echo "<h4>";
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' >$row[heading]</a> </span>";

			echo "</span>";
			echo "</h4>";

			echo "$row[question_detail] <span class='view2'>Views : $row[views], Replies :$count</span>";
			echo "<br><br>";

			echo "Posted by <br>$row[fullname]";

			echo "<br><div class='line'></div>";
		}
	} else {
		echo "No topics at the moment";
	}
	echo "<br><br>";
	require("footer.php")
?>
