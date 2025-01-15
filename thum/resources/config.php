<?php

// Displays error if not set ON
ini_set('display_errors', 1);
error_reporting(E_ALL);

$config['db_host'] = 'localhost';
$config['db_user'] = 'root';
$config['db_pass'] = '';
$config['db_name'] = 'thumela_db';

// foreach ( $config as $k => $v ){
// 	define(strtoupper($k), $v);
// }

// change according to you configuration
// $conn = mysqli_connect('localhost', $username, $pass, $dbname);
$conn = mysqli_connect('localhost',  'root', '', 'thumela_db');
