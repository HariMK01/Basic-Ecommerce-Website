<?php
include "includes/common.php";
if(!isset($_SESSION['email'])){
    header("location: index.php");
}
$email=$_SESSION['email'];
$pre_pass=md5($_POST['present_password']);
$chect_query = "SELECT id,email,password FROM users WHERE email='$email' AND password='$pre_pass'";
$check_query_run= mysqli_query($con, $chect_query) or die(mysqli_error($con));
if(mysqli_num_rows($check_query_run)>0){
    $password=md5($_POST['new_password']);
    $userid=$_SESSION['id'];
    if($password!= md5($_POST['retype_password'])){
  header("location: settings.php? retype_error=Retyped password does'nt match with the new password!");  
    }
    else{
    $pass_update_query="UPDATE users SET password='$password' WHERE id='$userid'";
    if(mysqli_query($con,$pass_update_query) or die(mysqli_error($con))){
        
        header('location: settings.php? success=Password changed successfully!');
    }
    
    }
}
else{
  header('location: settings.php? pass_error= Incorrect password! Enter a valid password');

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

