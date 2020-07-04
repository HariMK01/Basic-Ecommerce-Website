<?php
include "includes/common.php";
$user=$_SESSION['id'];
$item = $_GET['itemid'];
$cart_remove_query= "DELETE FROM users_items WHERE user_id='$user' AND item_id='$item'";
$cart_run = mysqli_query($con, $cart_remove_query) or die(mysqli_error($con));
if($cart_run) {
    header("location: products.php");
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

