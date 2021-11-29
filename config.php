<?php
// config file
// serve page connected to the config and config connected to the credentials page
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


// initialize/defining var
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'Success! You are now logged on';
$errors = array();


function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}

?>