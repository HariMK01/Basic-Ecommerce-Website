<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
    {   header('location: products.php'); 
    
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
         <link href="style.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
             <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <form method="POST" action="signup_script.php">
                 <h1>SIGN UP</h1>
                        <div class="form-group">
                           
                            <input type="text" class="form-control " placeholder="Name" required  name="name" ></div>
                        <div class="form-group">
                           
                            <input type="email" class="form-control " placeholder="Email" required name="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$">
                              <div><?php 
                              if (isset($_GET['email_error'])) {
                                         $name = $_GET['email_error'];
                                         echo $name;
                                      }

                                      ?>
                              </div>
                        </div>
                           <div class="form-group">
                           
                            <input type="password" class="form-control" placeholder="Password" required name="password" pattern=".{6,}">
                        </div>
                 <div class="form-group">
                           
                            <input type="text" class="form-control " placeholder="Contact" required name="contact" pattern=".{,10}"></div>
                            <div class="form-group">
                           
                            <input type="text" class="form-control " placeholder="City" required name="city"></div>
                            <div class="form-group">
                           
                            <input type="text" class="form-control" placeholder="Address" required name="address"></div>
                            
                            <button class="btn btn-primary">Submit</button>
                            </form>
        </div>
             </div>
        </div>
          <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
