<?php 
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	include_once('resources/config.php'); 
	include_once('resources/init.php'); 

// Check if id of post is set or not
if ( ! isset($_GET['id']) ) {
	header('location: index.php');
	die();
}

if(fun_del_post($_GET['id'])){
	header('location: success.php?type=delete');
}
else{
	header('location: error.php?type=delete');
}

?>