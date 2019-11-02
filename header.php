<?php
	// require_once("utility.php");
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>Online Discussion Forum</title>
	<link rel="stylesheet" href="data/style.css" type="text/css" media="screen">
</head>

<!-- <body background="data/images/background.png"> -->
    <div id="main">
        <div class="sheet">
            <div class="asheet-body">
                <!--  The html, body tags and  DIV containers are not closed, so that they may continue to
                be used within pages that require this header.php file. -->
                <!-- <div class="header">
                    <div class="header-jpeg"></div>
                    <div class="logo">
                        <div class="logo-name-1">&nbsp;&nbsp;&nbsp;TCSS 499</div>
                        <div class="logo-name-2">&nbsp;Discussion Forum</div>
                        <div class="logo-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Molly Brougham</div>
                    </div>
                </div> -->

                <div class="nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="menu">
						<li>
	                		<a href="index.php" id="index">
	                			<span class="t">Front Page</span>
	                		</a>
	                	</li>
                		<li>
	                		<a href="home.php" id="home">
	                			<span class="t">Home</span>
	                		</a>
	                	</li>
                		<li>
                			<a href="about.php" id="about">
                				<span class="t">About</span>
							</a>
                		</li>
                		<li>
                			<a href="forum.php" id="forum">
                				<span class="t">Forum</span>
                			</a>
                		</li>
                		<li>
							<a href="messages.php" id="message">
								<span class="t">Message</span>
							</a>
						</li>
					</ul>
                </div>
