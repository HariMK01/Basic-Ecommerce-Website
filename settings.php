<?php 
require "includes/common.php";
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
                    <form action="settings_script.php" method="POST">
                 <h1>Change Password</h1>
                        <div class="form-group">
                           
                            <input type="password" class="form-control " placeholder="Old Password"  name="present_password">
                             <div><?php 
                              if (isset($_GET['pass_error'])) {
                                         $name = $_GET['pass_error'];
                                         echo $name;
                                      }

                                      ?>
                              </div>
                            </div>
                         <div class="form-group">
                           
                            <input type="password" class="form-control" placeholder="New Password" name="new_password">
                        </div>
                 <div class="form-group">
                          
                           
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="retype_password">
                       
                            <div> <?php if (isset($_GET['retype_error'])) {
                                         $name = $_GET['retype_error'];
                                         echo $name;
                                      }

                                      ?>
                            </div>
                
                            
                           </div>
                 <div class="form-group">
                     <button class="btn btn-primary">Change</button>
                 </div>
                 <div><?php if (isset($_GET['success'])) {
                                         $name = $_GET['success'];
                                         echo $name;
                                      }

                                      ?></div>
                  </form>
             </div>
        </div>
        </div>
       <?php  
          include 'includes/footer.php';
       ?>
    </body>
</html>
