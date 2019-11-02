<?php
require("header.php");
require("conn.php");
// require("checkUser.php") ?>

<script type="text/javascript">
	document.getElementById("about").className="active";
</script>

<div class="bodyPostContent">
	<div class="contentLayout">

		<h2>About</h2>
		<p align="justify">It is a forum which allows users to login,post messages to and view threads, create threads, and send private messages to other users.
			The forum uses HTML, CSS to present the UI, PHP and MySQL to hold the
			database of messages, users, threads, and posts, and JavaScript to
			show ads.</p>
	</div>
</div>



<?php require("footer.php")?>
