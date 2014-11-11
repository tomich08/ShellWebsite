<?php

//store in a variable the password the user typed regarding their username and password.
$theirID = $_POST['uid'];
$theirpass = $_POST['upass'];
//include run my query function definition
include('includes/functionlib.php');
//use the password in a query to see if there's anyone in the mySQL user table with that password:
$results = run_my_query("SELECT * FROM user WHERE password = \"$theirpass\" AND username = \"$theirID\"");

//if it found such a user in the user table...
$results->data_seek(0);
            
	if($row = $results->fetch_assoc()){
	//..save some info regarding user account.  
	//valid user
	session_start();
	$_SESSION['logged_in']=true;
	$_SESSION['uname']=$row['username'];
	$_SESSION['priv']=$row['privilege'];
	$_SESSION['pass']=$row['password'];
	//and redirect user to all products page
	header('Location:products.php');
//if no such user in table
	}else{
		header('Location:login.php');
	//...send them back to login with querystring to trigger some text feedback there. 

}
?>