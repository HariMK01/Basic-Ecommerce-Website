<?php

require "includes/common.php";
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
                <div class="col-sm-6 col-xs-offset-3">
                    
                    <div class="panel panel-primary ">
                        
                         <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p style="color: #985f0d"><i>Login to make a purchase</i></p>
                            <form method="POST" action="login_submit.php">
                        
                        <div class="form-group">
                           
                            <input type="text" class="form-control " placeholder="Email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                         
                        </div>
                           <div class="form-group">
                           
                            <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}">
                          
                        </div>
                            
                            <button class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        
                        <div class="panel-footer">Don't have an account?<a href="signup.php" style="text-decoration: none; color: blue"><b>Register</b></a></div>
                    </div>
                    </div>
                </div>
            </div>
         <?php
        include 'includes/footer.php';
        ?>
         
      
        
    </body>
</html>
