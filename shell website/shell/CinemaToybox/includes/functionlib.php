<?php
/**
 *function library: common functions 
 *all the documents will import
 *
 *@package CinemaToybox Functions
 *@author Matt Tomich
 *@copyright 2014 Matt Tomich
 */
 
 /**
  *function that cleans strings
  *disabling code injections 
  *
  *@param $userstring  the characers we want to clean
  *@return $cleanstring same chararcters, all clean(or empty)
  */
  
  
  function rm_injections($userstring){ 
  $cleanstring = '';
    if (isset($userstring)) {
       //trim space from left or right:
       $userstring = trim($userstring);
       //replace the empty string with the value the user typed if it contains non-quote characters (We're now confident it's clean):
       if (preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $userstring)){ 
          $cleanstring = $userstring;
       } 
    }
    //return the clean string (or the original empty string if it was dangerous).
    return $cleanstring;
 }
 
 /**
  *function that runs any mysql query & returns result
  *@param $q	passes the querystring through the function 
  *@return $results		the results of the query as an array
  */
  
  function run_my_query($q){
	  $mysqli = new mysqli('localhost','root','','home_theater');
	//if there was an error with the previous line..
	if($mysqli->connect_errno){
		//show me a custom message. 
		echo 'failed to connet to server/db'.$mysqli->connect_errno;
		die();//stop running code on this page
	}
	
	$results = $mysqli->query($q)or die($q.'Problem with my query'.$mysqli->error);
	
	
	mysqli_close($mysqli);
	
	return $results;
	  
  }


  ?>
