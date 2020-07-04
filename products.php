<?php
include "includes/common.php";
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
        include 'includes/check_if_added.php';
        ?>
         <div class="container content2">
            
           
             <div class="jumbotron text-center">
                 <h1>Welcome to our Lifestyle Store!</h1>
                 <p style="color: #8c8c8c;">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>                
            </div>
             <div class="row row_style text-center">
               <!-- <div class=" col-md-3 col-sm-6 ">
                    <a href="#" class="thumbnail" ><img src="img/1.jpg"  alt="responsive_image"  > 
                     <div class="caption">
                                <h3>Cameras</h3>
                                <p style="font-size: 12px;">Choose among the best available in the world.</p>
                            </div>
                    </a>
                </div>-->
                <div class=" col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                    <a href="#" ><img src="img/5.jpg" alt="responsive_image" >   </a>
                    <div class="caption">
                                <a href="#" ><h3>Canon EOS</h3>
                                 <p>Price: Rs36000.00</p>  </a>
                               
                                     <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=1" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?> 
                                 
                                
                            </div>
                 
                    </div>
                    
                </div>
                <div class=" col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                    <a href="#" ><img src="img/2.jpg" alt="responsive_image"></a> 
                     <div class="caption text-center">
                               <a href="#" > <h3>Nikon DSLR</h3>
                                <p>Price: Rs40000.00</p></a>
                                 <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                              <a href="cart_add.php?id=2" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?> 
                            </div>
                      
                    </div>
                </div>
                <div class=" col-md-3 col-sm-6 ">
                     <div class="thumbnail">
                    <a href="#" ><img src="img/3.jpg" alt="responsive_image" ></a>
                    <div class="caption text-center">
                                <a href="#" > <h3>Sony DSLR</h3>
                                <p>Price: Rs50000.00</p></a>
                                 <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=3" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?> 
                            </div>
                     </div>
                    
                </div>
                  <div class=" col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                    <a href="#"><img src="img/4.jpg" alt="responsive_image" > </a>
                    <div class="caption">
                               <a href="#"><h3>Olympus DSLR</h3>
                                <p>Price: Rs80000.00</p> </a>
                                 <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=4" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?> 
                            </div>
                      </div>
                    
                </div>
                 
                 
                  <div class=" col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                    <a href="#"><img src="img/9.jpg" alt="responsive_image" > </a>
                    <div class="caption">
                                <a href="#"><h3>Titan Model #301</h3>
                                <p>Price: Rs13000.00</p></a>
                                  <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=5" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?> 
                            </div>
                   
                          </div>
                    
                </div>
                  <div class=" col-md-3 col-sm-6 ">
                       <div class="thumbnail">
                    <a href="#" ><img src="img/10.jpg" alt="responsive_image" > </a>
                    <div class="caption">
                                  <a href="#" ><h3>Titan Model #201</h3>
                                <p>Price: Rs3000.00</p></a>
                                  <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=6" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?>
                            </div>
                   
                       </div>
                </div>
                  <div class=" col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                    <a href="#" ><img src="img/11.jpg" alt="responsive_image" ></a>
                    <div class="caption">
                                   <a href="#" ><h3>HMT Milan</h3>
                                <p>Price: Rs8000.00</p></a>
                                <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=7" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?>
                            </div>
                    
                      </div>
                    
                </div>
                  <div class=" col-md-3 col-sm-6 ">
                       <div class="thumbnail">
                    <a href="#"><img src="img/12.jpg" alt="responsive_image" > </a>
                    <div class="caption">
                                  <a href="#"><h3>Faber Luba #111</h3>
                                <p>Price: Rs18000.00</p> </a>
                                  <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=8" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?>
                            </div>
                       </div>
                    
                </div>
                <div class=" col-md-3 col-sm-6 ">
                     <div class="thumbnail">
                    <a href="#"><img src="img/6.jpg"  alt="responsive_image" ></a>
                    <div class="caption">
                                 <a href="#"> <h3>H&W</h3>
                                <p>Price: Rs800.00</p></a>
                                 <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=9" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?>
                            </div>
                   </div>
                    
                </div>
                 <!-- <div class=" col-md-3 col-sm-6 ">
                    <a href="#" class="thumbnail"><img src="img/7.jpg"  alt="responsive_image" >
                    <div class="caption">
                                <h3>Watches</h3>
                                <p style="font-size: 12px;">Original watches from the best brands.</p>
                            </div>
                    </a>
                    
                </div>-->
                 
                  <div class=" col-md-3 col-sm-6 ">
                       <div class="thumbnail">
                    <a href="#" ><img src="img/8.jpg" alt="responsive_image" ></a>
                    <div class="caption">
                              <a href="#" > <h3>Louis Philippe</h3>
                                <p>Price: Rs1000.00</p></a>
                                  <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=10" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?>
                            </div>
                       </div>
                    
                </div>
                  <div class=" col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                    <a href="#"><img src="img/13.jpg" alt="responsive_image" ></a>
                    <div class="caption">
                               <a href="#"><h3>UCB</h3>
                                <p>Price: Rs1500.00</p></a>
                                  <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=11" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?>
                            </div>
                     </div>
                    
                </div>
                  <div class=" col-md-3 col-sm-6 ">
                      <div class="thumbnail">
                    <a href="#" ><img src="img/14.jpg" alt="responsive_image" > </a>
                    <div class="caption">
                                 <a href="#" ><h3>Allen Solly</h3>
                                <p>Price: Rs1300.00</p></a>
                                  <?php if (!isset($_SESSION['email'])) { ?>                                
                                  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                                      <?php                             } else {                                 //We have created a function to check whether this particular product is added to cart or not.                                 
                                      if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)                                    
                                       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
                                       } else {                                     
                                           ?>                                     
                                  <a href="cart_add.php?id=12" name="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                                      <?php                                 
                                     
                                     }                             
                                     
                                       }                            
                                       ?>
                            </div>
                    
                      </div>
                </div>
                
             </div>
         </div>
         <?php
        include 'includes/footer.php';
        ?>
       
    </body>
</html>
