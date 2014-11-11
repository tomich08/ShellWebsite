<?php
session_start();
//bring in the function code from an external document:
include("includes/functionlib.php");	

$ordercol = 'id';
if(isset($_GET['sortcol'])){
	$ordercol = $_GET['sortcol'];	
}
$where='';
//if category link was clicked, replace value in $where with the appropriate where clause

//run a query using one of the functions from that include. 
$results = run_my_query('SELECT * FROM products ORDER BY '.$ordercol); 


?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cinema Toybox - Home Theater Catalog - All Products</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href='http://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
</head>

<body class="clearfix">
	<div id="subheader">
    
    
    <?php /* if else statement sets condition so the user can tell if they are looged in or logged out*/ if(isset($_SESSION['logged_in'])){?>
    <li><a href="process-logout.php">Log Out</a></li>
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
    
    
    
            
           
     
            <?php /* This if statement allows user to see admin options after logging in. it remains hidden if not logged in*/
                    if(isset($_SESSION['logged_in'])){
                        echo '<h2 class="nobanner">Welcome '.$_SESSION['uname'].'</h2>';
						 echo '<p>Feel free to make inventory changes</p>';
                    }
					
					?>
                  
                <div class="special">  
               <h2>All Products</h2>
               </div>
            
                 
    	<aside>
        
            
                    
        	
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
                    
               
            </div> 
            </nav>
		</aside>
        
        <article class="clearfix">
            <div class="products-box">
            
            
                                
                    
            <nav class="add clearfix">
            	<ul>  
                	<li id="addr"><a href="products.php">All Products</a></li>              
                	<?php /* This if statement allows user to see admin options after logging in. it remains hidden if not logged in*/if(isset($_SESSION['logged_in'])){?>
                	<li ><a href="add-product.php">Add Record</a></li>
                    <?php } ?>
                    
                   
                </ul>
            </nav>
            
            <div id="sort" class="clearfix">
            		<p>Sort by:</p>
                    <form action="products.php" method="get">
                                <select name="sortcol" onchange="showUser(this.value)">
                                    <option value="brand">Manufacturer</option>
                                    <option value="price">Price</option>
                                </select>
                                
                                <input type="submit" value="Submit">
                            </form>
                    </div>
            
            
            
            	<?php
				
					//the following while loop retrieves all info from database
					$results->data_seek(0);
					
					while($row=$results->fetch_assoc()){
						$id = $row['id'];	
						$producttype = $row['product_type'];
						$prodhead = $row['prod_head'];
						$brand = $row['brand'];
						$price = $row['price'];
						$bg = $row['bg_img'];
						$tm = $row['tm_img'];
						$prod_desc = $row['prod_desc'];
						$mini_desc = $row['mini_desc'];
					
				
				?>
                
                <h4><?php /*imports each product name*/echo $prodhead; ?></h4>
       		</div>           
            <div class="pic_box">
            	<a href="product-details.php"/><img src="img/<?php /*imports each photo for product*/echo $tm; ?>" alt="photo of <?php echo $brand; ?>" class="minipic"/></a>
              
                
                <div class="mini_desc_two">
            	<p><?php echo $mini_desc; ?></p>
                </div>
            </div>
            
            <div class="mini_desc">
            	<p><?php /*imports each mini description for each product*/ echo $mini_desc; ?></p>
                <form action="product-details.php" method="post"/>
                <input type = "hidden" name="detail_id" value= " <?php echo $id;  ?>" />
                <input type="submit" class="submit3" value="Read More"/>
                </form>
            </div>
                  
                      
            <div class="add-to-cart">
            	<h5>$<?php /*imports price for each product*/echo $price;?></h5>
                <p>Price does not include tax.  Delivery and installation available for an extra charge.</p>
                <form action="product-details.php" method="post"/>
                <input type = "hidden" name="detail_id" value= " <?php echo $id;  ?>" />
            	<input type="submit" class="submit" value="Read More"/>
                </form>
                <input type="submit"  class="submit2" value="Add to Cart"/>
                
            </div>
            
            <form action="process-delete.php" method="post"/>
            	<input type = "hidden" name="deleteItem" value= " <?php /*stores id selected in variable to pass through to the details page*/echo $id;  ?>" />
                <?php if(isset($_SESSION['logged_in'])){?>   
   				<input type="submit"  class="delete" value="Delete"/>
                 <?php } ?>
            </form>	
            
            	<?php
				
				}
				?>
            
        </article>
        </main>
        
        <div id="bottom" class="bottomnav">
            <nav>
                <ul>
                	<li><a href="#">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
        </div>
        
       
                 
       <footer>
       		<h6>Copyright Cinema Toybox 2014</h6>
       </footer>        

<script src="js/script.js"></script>
</body>
</html>
