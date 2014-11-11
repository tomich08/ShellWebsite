<?php
/******
This method brings in users chosen ID of chosen product to delete. This method
will delete one particular row at a time then redirect user back to products page to verify results*/

$chosen_id = 1;

if(isset($_POST['deleteItem'])){
	$chosen_id=$_POST['deleteItem'];
}

include("includes/functionlib.php");

$results = run_my_query('DELETE FROM products WHERE id='.$chosen_id);

//redirect the user to another page 
header('Location:products.php'); 

?>