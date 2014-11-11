<?php 
//the id of which product to show starts off as a default. 
$chosen_id = 1;
//before it runs the query, replace that id # with the one the user chose. if user clicked one on the ALL Powers page.  
if(isset($_POST['detail_id'])){
	$chosen_id=$_POST['detail_id'];
}
//bring in the function code from an external document:
include("includes/functionlib.php");
//run a query using one of the functions from that include. 
$results = run_my_query('SELECT * FROM products WHERE id='.$chosen_id); 

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cinema Toybox - Online Home Theater Catalog - Product Details</title>
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
        	</div> </div>
    <main>
    
  	<div class="special">
    <?php
				
					//following while loop retrieves information from database. 
					$results->data_seek(0);
					
					while($row=$results->fetch_assoc()){
						
						$prodhead = $row['prod_head'];

				?>
    <h2><?php /*imports the name of each individual product*/ echo $prodhead; ?></h2>
    <?php
				
				}
				?>
    </div>
    	<aside>
        	<ul>
               	<li><a href="products.php">Back</a></li>
                </ul>
            <div id="sidenav" class="clearfix">
            	
                
             
                <div class="side_nav_bar">
                <h3>Shop Home Cinema</h3>
                </div>
                <div class="side_nav_2">
                <ul>
                <li><a href="#test">Menu</a></li>
                </ul>
                </div> 
          		
           
                
                <nav class="nav_drop1">
                	<div class="nav_drop">
                    <ul>
                        <li><a href="#">LCD Televisions</a></li>
                        <li><a href="#">LED Televisions</a></li>
                        <li><a href="#">Projection Screens</a></li>
                        <li><a href="#">Audio</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Remotes</a></li>
                        <li><a href="#">Blu Ray Players</a></li>
                    </ul>
                    
                </nav>
            </div>
		</aside>
        
        <article class="clearfix">
            <div class="products-box">
            	<?php
				
					//following while loop retrieves information from database. 
					$results->data_seek(0);
					
					while($row=$results->fetch_assoc()){
						$id = $row['id'];	
						$producttype = $row['product_type'];
						$prodhead = $row['prod_head'];
						$brand = $row['brand'];
						$price = $row['price'];
						$bg = $row['bg_img'];
						$prod_desc = $row['prod_desc'];
					
					
				
				?>
               </div> 
                 
                
            	
               
       		
           <div class="products_detail">
            <div class="pic_box_det">
                <img src="img/<?php /*imports each individual image of the products*/ echo $bg; ?>" alt="photo of <?php echo $brand; ?>" class="detailpic"/> 
          
          
          
                  <div class="full_desc"
                 <p><?php /*imports the detailed product description of each item*/ echo $prod_desc; ?></p>
                 </div>
                     </div>   
            <div class="add-to-cart_det clearfix">
            	<h5>$<?php /*imports the indiv*/echo $price;?></h5>
                <p>Price does not include tax.  Delivery and installation available for an extra charge.</p>
                <input type="submit"  class="submit2" value="Add to Cart"/>
            </div>
           </div> 
           
            
            	<?php
				
				}
				?>
                
                
                
                
                
             
             
                    	
                    	
                
                
                
                
                
            
        </article>
        </main>
        
        <div id="bottom" class="bottomnav">
            <nav>
                <ul>
                	<li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
        </div>
        
       
                        <!--<img src="img/<?php /*display thumbnail*/ echo $p_thumb; ?>" alt="photo of <?php /*display the name*/ echo $p_name;?>"/>-->
                 
       <footer>
       		<h6>Copyright Cinema Toybox 2014</h6>
       </footer>        

<script src="js/script.js"></script>
</html>
