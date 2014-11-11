<?php

	//the following kills the session the user is in and logs them out. 
	session_start();
	session_destroy();
	header('Location:products.php');

?>