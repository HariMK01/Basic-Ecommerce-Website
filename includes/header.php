<div class="navbar navbar-inverse navbar-fixed-top">     
    <div class="container">         
        <div class="navbar-header">             
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                 
                <span class="icon-bar"></span>                 
                <span class="icon-bar"></span>                 
                <span class="icon-bar"></span>                                     
            </button>             
            <a class="navbar-brand" href="index.php" style="font-size:27px;">Lifestyle Store</a>         
        </div>        
        <div class="collapse navbar-collapse" id="myNavbar">             
            <ul class="nav navbar-nav navbar-right">                 
                <?php if (isset($_SESSION['email'])) { ?>
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>                     
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>                     
                <li>
                    <a href = "logout_script.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>                     
                                  
                   <?php 
                        } else {                     ?>                     
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>                    
                <li><a href="#loginmodal" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>                        
                              <?php  } ?>             
            </ul>         
        </div>    
    </div> 
</div> 
  <div class="modal fade container"  id="loginmodal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            <h4>LOGIN</h4>
                        </div>
                    
                        <div class="modal-body">
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
                        
                        <div class="modal-footer">Don't have an account?<a href="signup.php" style="text-decoration: none; color: blue"><b>Register</b></a></div>
                    </div>
                    </div>
                </div>