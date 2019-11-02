<?php
session_start();
require("header.php");
require("checkUser.php");
require("../conn.php");
$qid1=$_GET['qid'];

$sql="delete from question where question_id='$qid1'";
$sql1="delete from answer where question_id='$qid1'";
$res = mysqli_query($db,$sql);
$r = mysqli_query($db,$sql);
if($res || $r){
  echo "<h1> Post Deleted </h1>";
  echo "<a href='home.php'>Back</a>";
}


 ?>
