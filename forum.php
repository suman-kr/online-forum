<?php
	session_start();
	require("header.php");
	require("conn.php");
	if ($_SESSION["fn"] == null){
		header("location:unreg.php");
		exit();
	}

	require("checkUser.php");
?>

<script type="text/javascript">
	document.getElementById("aforum").className="active";
</script>

<?php
	$topic = mysqli_query($db,"SELECT * FROM topic");

	while($r1 = mysqli_fetch_array($topic)) {
			echo "<div class='heading'>$r1[topic_name]</div>";

			$stopic = mysqli_query($db,"SELECT * FROM subtopic WHERE topic_id=$r1[topic_id]");

			while($r2 = mysqli_fetch_array($stopic)) {
				echo "<div class='box'>";
				echo "<div class='sub-heading'>
						<a href='questions.php?id=$r2[subtopic_id]'> $r2[subtopic_name]</a>
					</div>";
				echo "<p>$r2[subtopic_description]</p>";
				echo "</div>";
			}
	}

	require("footer.php");
?>
