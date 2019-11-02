<?php
 session_start();
 require("header.php");
 require("conn.php");
 require("checkUser.php");
 if (isset($_POST['submit'])){
   $pwd = $_POST["pwd"]; //password
   $id = $_POST["un"]; //username
   $fn = $_POST["fn"]; //full-name
   $dob = $_POST["dob"]; //dob
   $email = $_POST["e_mail"]; //e-mail
   $state = $_POST["sta"]; //state
   $country = $_POST["cou"]; //country
   // echo " ".$new." ".$id;
 $sql = "update user set password = '$pwd' where username = '$id'";
 $sql1 = "update user set fullname = '$fn' where username = '$id'";
 $sql2 = "update user set dob = '$dob' where username = '$id'";
 $sql3 = "update user set e_mail = '$email' where username = '$id'";
 // $sql4 = "update user set gender = '' where username = '$id'";
 $sql5 = "update user set state = '$state' where username = '$id'";
 $sql6 = "update user set country = '$country' where username = '$id'";

 $result = mysqli_query($db, $sql);
  $result1 = mysqli_query($db, $sql1);
   $result2 = mysqli_query($db, $sql2);
    $result3 = mysqli_query($db, $sql3);
     // $result4 = mysqli_query($db, $sql4);
 $result5 = mysqli_query($db, $sql5);
      $result6 = mysqli_query($db, $sql6);
 if($result || $result1 || $result2 || $result3 || $result4  || $result5 || $result6  ){
 echo "<h1> Profile Updated successfully!!</h1>";
}
 }
 ?>
 <!-- <h1>Your profile was successfully updated  </h1> -->
 <?php require("footer.php")?>
