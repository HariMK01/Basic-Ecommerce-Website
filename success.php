<?php
include "includes/common.php";
if(!isset($_SESSION['email'])){
    header("location: index.php");
}
$userid= $_SESSION['id'];
$status_update_query= "UPDATE users_items SET status='Confirmed' WHERE user_id='$userid'";
if(mysqli_query($con, $status_update_query) or die(mysqli_error($con))){
echo "<p><centre> Your order is confirmed. Thank you for shopping with us.\\n <a href='products.php'> Click here </a> to purchase any other item.  </centre></p>";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

