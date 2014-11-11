<?php 


?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cinema Toybox - Online Home Theater Catalog - Add Products</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href='http://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>
	<div id="subheader">
    <?php /* if else statement sets condition so the user can tell if they are looged in or logged out*/if(isset($_SESSION['logged_in'])){?>
    <li><a href="add-product.php">Log Out</a></li>
    <?php } else{?>
    <li><a href="login.php">Sign In</li></a>
    <?php } ?>
 
    
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
    </div>
    
    
    <div class="menu_button">
    		<ul>
        	<li><a href="#bottom"><img src="img/menu.png" alt="menu" class="menu"/></a></li>
            </ul>
        	</div></div>
    <main class="addMain">
    			<div class="special">
               <h2>Add Products</h2>
               </div>
         
                <form action="process-product.php" method="post" enctype="multipart/form-data" id="addForm"/>
                
                	<div id="form1">
                	<p class="addInv">What type of product?
                    <select name="prod_type" >
                        <option>Accessories</option>
                        <option>Theater Kit</option>
                        <option>Audio</option>
                        <option>Television</option>
           			 </select><span id="feedtype"></span></p>
                    
                    <p class="addInv">Name of product:<input type="text" name="prod_name" /><span id="feedname"> </span></p>
                    
                    <p class="addInv">What is the brand?
                    <select name="brand-type">
                        <option>Innotech</option>
                        <option>Kiawi</option>
                        <option>Patson Electronics</option>
                        <option>Miatchi</option>
           			 </select><span id="feedbrand"></span></p>
                     </div>
                     
                     <div id="form2">
                    <p class="addInv">Price of new product:$<input type="text" name="newprice" /><span id="feedprice"></span></p>
                    
                    <p class="addInv">Brief product description: <input type="TEXTAREA" name="brief_desc" /><span id="feedbdesc"></span></p>
                    
                    <p class="addInv">Full product description: <input type="TEXTAREA" name="full_desc" /><span id="feedfdesc"></span></p>
                    </div>
                    
                    <div id="formimg">
                    <p class="addInv" id="imgleft">Thumbnail Img product<input type="file" name="newthumb"/><span id="feedthumb"></span></p>
                    
                    <p class="addInv" id="imgright">Full size image of product<input type="file" name="new_full_pic" /><span id="feedpic"></span></p>
                	
                    </div>
                    <input type="submit" value="Add this Product" class="addprod"/>
                </form>
                
                
      
	
    </main>
    
    <div id="bottom" class="bottomnav">
            <nav>
                <ul>
                	<li><a href="products.php">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
        </div>
        
       
                 
       <footer>
       		<h6>Copyright Cinema Toybox 2014</h6>
       </footer>  
       
    <script src="js/add-product.js"></script>
</body>
</html>
