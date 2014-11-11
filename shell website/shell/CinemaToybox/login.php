<?php 
session_start();


?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cinema Toybox - Online Home Theater Catalog - Log In</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href='http://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

</head>

<body class="clearfix">
	<div id="subheader">
    <?php /* if else statement sets condition so the user can tell if they are looged in or logged out*/if(isset($_SESSION['logged_in'])){?>
    <li><a href="add-product.php">Log Out</a></li>
    <?php }else{?>
    <li><a href="login.php">Sign In</li></a>
    <?php } ?> 
 	</div>
    	
 
    
    <div id="subheader2">
    <header class="head2 clearfix">
        <div class="logobox">
        <img src="img/logo3.png" alt="logo" class="logo"/>  
        </div>
        
        
        <h1>Cinema Toybox</h1>
        	
            
        <div class="topnav">
            <nav>
                <ul>
                	<li><a href="#">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
        </div>
  	</header>
  
    
    
    <div class="menu_button">
    		<ul>
        	<li><a href="#bottom"><img src="img/menu.png" alt="menu" class="menu"/></a></li>
            </ul>
        	</div></div>
            
            <main>
            
            	<h2 class="nobanner specialtwo">Log In</h2>
            
    
           
                
            	<div id="logIn">
            			<form action="process-login.php" method="post"/>
            				<p>User ID:</p> <input type="text" name="uid"/><span id="feeduid"></span><br/>
                        	<p>Password:</p> <input type="password" name="upass"/><span id="feedpass"></span><br/>
                   
                        	<input type="submit" name="login" value="Log In"/>
                        
                        </form>
                  </div>      
                        
            </main>
            
            <div id="bottom" class="bottomnav clearfix">
            <nav>
                <ul>
                	<li><a href="products.php">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
        </div>
        
       
                 
       <footer class="clearfix">
       		<h6>Copyright Cinema Toybox 2014</h6>
       </footer> 
        
<script src="js/login.js"></script>
</body>
</html>