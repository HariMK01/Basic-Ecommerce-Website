<?php
  function check_if_added_to_cart($item_id){
      require 'includes/common.php';
      $user_id=$_SESSION['id'];
      $user_cart_query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
      $user_cart_added = mysqli_query($con, $user_cart_query) or die(mysqli_error($con));
      $total_items= mysqli_num_rows($user_cart_added);
      if($total_items>=1){
          return 1;
      }
      else{
          return 0;
      }
  }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

