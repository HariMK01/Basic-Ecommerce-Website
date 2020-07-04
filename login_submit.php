<?php
require "includes/common.php";
$email =$_POST['email'];
$password=md5($_POST['password']);
$user_registration_query = "SELECT id,email,password FROM users WHERE email='$email' AND password='$password'";
$user_registration_submit = mysqli_query($con, $user_registration_query)
        or die(mysqli_error($con));
if(mysqli_num_rows($user_registration_submit)==0){
    $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
 
  header("location: login.php");
}
else{
    $row = mysqli_fetch_array($user_registration_submit);
           $_SESSION['email'] = $row['email'];
           $_SESSION['id'] = $row['id'];
           header("location: products.php");
   }