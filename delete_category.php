<?php 

	include_once('resources/init.php');

	//print_r($_GET);
if (!isset($_GET['id']) ) {
	header('location: index.php');
	die();
}

// fun_del_category() is defined in /resources/fun diretory

if(fun_del_category($_GET['id']) == true){
	header('location: success.php?type=delete');
}
else{
	header('location: error.php?type=delete');
}

// header('location: category_list.php');
// die();
