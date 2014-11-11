<?php
//make a var to store where our xml file is.
$file = 'data/services.xml'; 





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
                    <li><a href="#">Services</a></li>
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
    
    
    
            
           
     
   
                  
                <div class="special">  
               <h2>Services</h2>
               </div>
            
                 
    
    		<div id="services">
            <?php
			
			//load the xml data in var $staff/object.  
			$uservices = simplexml_load_file($file) or die('Error:simplexml_load_file failed');
			//loop through the child elements of our XML <staff>root element, doing what's in{} to each <employee>.  We'll refer to the chunk of data in each <employee> element as 'e_data'.->is the object operator. => is the double arrow operator for accessing array values. 
			foreach($uservices->children() as $service=> $s_data){
			//store into vars each bit of data we want from the employee
			$s_title = $s_data->service_title;
			$s_info = $s_data->service_info;
			$s_info2 = $s_data->service_info_2;
			$s_cost = $s_data->service_cost;
			$s_specials = $s_data->service_specials;
			$s_id = $s_data['id'];	
			//display and appealing HTML content structure and output those vars where appropriate:
			?>
           
            	<h4><?php echo $s_title;?></h4>
                <p><?php echo $s_info;?></p><br/>
                <p><?php echo $s_info2;?></p><br/>
                <p><?php echo $s_cost;?></p><br/>
                <p><?php echo $s_specials;?></p><br/>
            
            <?php	
			}//closes for each.
			?>  
            
         </div>
	
            
        
        </main>
        
        <div id="bottom" class="bottomnav">
            <nav>
                <ul>
                	<li><a href="products.php">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Services</a></li>
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
