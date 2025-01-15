<?php

// Displays error if not set ON
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Get the database details
include_once('config.php');

// Connect to Database
$conn = mysqli_connect('localhost',  'root', '', 'thumela_db'); 


include_once('func/blog.php');

?>