<?php
 include "includes/common.php";
 $itemid=$_GET["id"];
 $userid=$_SESSION['id'];
 $cart_insert_query= "INSERT INTO users_items(user_id, item_id, status) VALUES('$userid', '$itemid', 'Added to cart')";
 $cart_add_query=  mysqli_query($con, $cart_insert_query) or die (mysqli_error($con));
 header("location: products.php");
