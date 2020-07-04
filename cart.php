<?php 
  include 'includes/common.php';
  if(!isset($_SESSION['email'])){
      header("location: index.php");
  }
 ?> 
  
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title></title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
         <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <?php
          include 'includes/header.php';
        ?>
        
        <div class="container content3">
                <h1> Cart </h1>
        <div class="table-responsive">     
        <table class="table table-striped  table-hover text-center table1">
             
            <tbody>
                <tr><th>Item number</th> <th>Item name</th> <th>Price</th><th></th></tr>
              <?php 
               $user_id=$_SESSION['id'];
                $user_cart_query= "SELECT * FROM users_items INNER JOIN users ON users_items.user_id=users.id AND users.id='$user_id'  INNER JOIN items ON items.id=users_items.item_id";
                $user_cart_run=  mysqli_query($con, $user_cart_query) or die(mysqli_error($con));
                if(mysqli_num_rows($user_cart_run)==0){
                    $message = "Add an item first!!\n";
                   echo "<script type='text/javascript'>alert('$message');</script>"; 
                }
                else{ 
                    $sum=0;
                    while( $row = mysqli_fetch_array($user_cart_run)){
                        $sum=$sum+$row['price'];
                
                  ?>
                
          
               
                
                <tr><td><?php echo $row['item_id']?></td> <td><?php echo $row['name'] ?></td> <td><?php echo $row['price']?></td> <td> <a href="cart_remove.php? itemid= <?=$row['item_id'];?>" class='remove_item_link'> Remove</a> </td></tr>
                <?php } ?>
                <tr><td> </td> <td>Total</td><td><?php echo $sum?></td><td><a href="success.php" class='btn btn-primary btn-lg'>Confirm Order</a></td></tr>
                   <?php }
                ?>
                
              					
            </tbody>
        </table>
        </div>
         </div>
       <?php  
          include 'includes/footer.php';
       ?>
    </body>
</html>
