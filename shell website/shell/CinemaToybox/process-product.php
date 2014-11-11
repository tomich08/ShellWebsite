<?php 
//bring in the function code from an external document:
include('includes/functionlib.php');
//store the product name that the user chose on add-pproduct.php
$prodType = rm_injections($_POST['brand_type']);
$prodName = rm_injections($_POST['prod_name']);
$brand = rm_injections($_POST['brand']);
$newPrice = rm_injections($_POST['newprice']);
$briefDesc = ($_POST['brief_desc']);
$fullDesc = ($_POST['full_desc']);
//prepare a var to store the next available id #
$nextid=0;
//run a query to get the highest id number currently used in the table
$results = run_my_query('SELECT id FROM products ORDER BY id DESC LIMIT 1');


//pull info from $results to display a little about each product
                //set our search to the first row in $results
                $results->data_seek(0);
                //this loop does what's in {} to each row retrieve by the mysql query above, stopping when it runs out of rows. 
                while($row = $results->fetch_assoc()){
					$nextid = $row['id'] + 1;//stores highest rows id and then adds one
				}
					
					
				
			
//create a new unique name for the uploaded image
$newthumbname = 'i'.$nextid.$_FILES['newthumb']['name'];
//copy the image the user uploads into a folder/have to explain where you are moving it from and then to where. 
move_uploaded_file($_FILES['newthumb']['tmp_name'],'img/'.$newthumbname);
//run a query using one of the functions from that include. 
//create a new unique name for the uploaded image
$newthumbname2 = 'i'.$nextid.$_FILES['new_full_pic']['name'];
//copy the image the user uploads into a folder/have to explain where you are moving it from and then to where. 
move_uploaded_file($_FILES['new_full_pic']['tmp_name'],'img/'.$newthumbname2);
//run a query using one of the functions from that include. 
$results = run_my_query("
	INSERT INTO products
	VALUES
	('$nextid','$prodType','$prodName','$brand','$newPrice','$newthumbname2','$newthumbname','$briefDesc','$fullDesc')


");

//redirect the user to another page 
header('Location:products.php');
?>

