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
        
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                     <h1>We sell lifestyle.</h1>
                     <p>Flat 40% OFF on premium brands</p><br>
                     <a href="login.php" class="btn btn-danger btn-lg active">Shop now</a>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
