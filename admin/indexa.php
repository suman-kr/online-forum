<div id="art">
<div class="sheet">

<?php
	require("header.php");
	require("../conn.php");
?>

<script type="text/javascript">
	document.getElementById("home").className="active";
</script>
	<div class="contentLayout">
		<div class="content">
			<div class="post">
				<!-- Curved Edges of Welcome Text area container -->
				<div class="postContainerTL"></div>
                <div class="postContainerTR"></div>
                <div class="postContainerBL"></div>
                <div class="postContainerBR"></div>
                <div class="postContainerTC"></div>
                <div class="postContainerBC"></div>
                <div class="postContainerCL"></div>
                <div class="postContainerCR"></div>
                <div class="postContainerCC"></div>
                <!-- End of curved container edges -->
                <div class="postContainerBody">
                	<div class="post-inner">
                    	<h2 class="postHeaderIcon-wrapper">
                        	<span class="bodyPostHeader">Welcome</span>
                        </h2>
                        <div class="postContent">


							<p>
								An <b>Internet forum</b>, or <b>message board</b>, is an online discussion site
								where people can hold conversations in the form of posted messages. They
							 	differ from chat rooms in that messages are often longer than one line
							 	of text, and are at least temporarily archived. Also, depending on the
							 	access level of a user or the forum set-up, a posted message might need
							 	to be approved by a moderator before it becomes visible.
							</p>
							<p>
								Forums have a specific set of jargon associated with them; e.g., a
								single conversation is called a "thread", or <i>topic</i>.
							</p>
							<p>
								A discussion forum is hierarchical or tree-like in structure: a
								forum can contain a number of subforums, each of which may have
								several topics. Within a forum's topic, each new discussion started
								is called a thread, and can be replied to by as many people as so
								wish.
							</P>
							<p>
								Depending on the forum's settings, users can be anonymous or have
								to register with the forum and then subsequently log in in order to post
								messages. On most forums, users do not have to log in to read existing
								messages.
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br>
        <div class="sidebar1">
		<div class="postContainerTL"></div>
        <div class="postContainerTR"></div>
        <div class="postContainerBL"></div>
        <div class="postContainerBR"></div>
        <div class="postContainerTC"></div>
        <div class="postContainerBC"></div>
        <div class="postContainerCL"></div>
        <div class="postContainerCR"></div>
        <div class="postContainerCC"></div>
        	<div class="block">
        		<div class="block-body">
                	<div class="blockHeader">
	                	<div class="t"><b>Log In</b></div>
					</div>
                    <div class="blockContent">
                    	<div class="blockContent-body">
                        	<div>
                            	<script type="text/javascript">
									function check(f) {
										if(f.uid.value=="") {
											document.getElementById("spuid").innerHTML=
												"Please enter your User ID ";
											f.uid.focus()
											return false;
										} else if(f.pwd.value=="") {
											document.getElementById("a").innerHTML=
												"Please enter your password";
											f.pwd.focus()
											return false;
										} else {
											return true;
										}
									}
								</script>

                                <form action="loginH.php" method="POST"
                                	onsubmit="return check(this)">

	                                <table>
										<tr><td>User Id:</td></tr>
										<tr><td>
											<input type="text" name="uid">
											<span id='spuid' style="color: red;"></span>
										</td></tr>
										<tr><td>Password:</td></tr>
										<tr><td>
											<input type="password" name="pwd">
											<span id='spuid' style="color: red;"></span>
										</td></tr>
										<tr><td>
											<input type="submit" value="Login">
											<input type="reset" value="Cancel">
										</td></tr>
										<tr><td>
											<a href="register.php">
												<input type="button" value="Register">
											</a>
										</td></tr>
									</table>

									<?php
										if (isset ($_GET["act"]))
										if ($_GET["act"] == "invalid")
										echo "Invalid User Id / password";
									?>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer">
	<?php require("footer.php")?>
</div>

</div>
