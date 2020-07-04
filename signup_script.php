<?php
require "includes/common.php";
$email =$_POST['email'];

$regex_email = "^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$";
if (!preg_match($regex_email, $email)) {
   
  header('location: signup.php? email_error= Email already exists! enter a valid email');
}

$user_registration_query = "SELECT id FROM users WHERE email='$email'";
$user_registration_submit = mysqli_query($con, $user_registration_query)
        or die(\mysqli_error($con));
if(mysqli_num_rows($user_registration_submit)>0){
    $message = "Entered Email alreadey exists!\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  
  
}

else{
    $password=md5($_POST['password']);
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
    $address=$_POST['address'];
   $user_signup_insert= "INSERT INTO users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
   $user_signup_submit=  mysqli_query($con, $user_signup_insert) or die(mysqli_error($con));
   $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
           header("location: products.php");
   }