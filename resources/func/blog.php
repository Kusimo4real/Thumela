<?php


// Displays error if not set ON
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once('resources/config.php'); 


function add_post($title, $contents, $category) {
	$title 		= $title;
	$contents 	= $contents;
	$category 	= (int) $category;
	//var_dump($category);

	$conn = mysqli_connect('localhost',  'root', '', 'thumela_db'); 
	mysqli_query($conn,"INSERT INTO `posts` SET

			`cat_id` 		= '{$category}',
			`title`			= '{$title}',
			`contents`		= '{$contents}',
			`date_posted`	= NOW()");

	mysqli_close($conn);
}

function edit_post($id, $title, $contents, $category) {
	$id 		= (int) $id;
	$title 		= $title;
	$contents 	= $contents;
	$category 	= (int) $category;

	$conn = mysqli_connect('localhost',  'root', '', 'thumela_db');
	mysqli_query($conn, "UPDATE `posts` SET
		`cat_id`	= {$category},
		`title`		= '{$title}',
		`contents`	= '{$contents}'
		WHERE `id` = {$id} ");

	mysqli_close($conn);
}

function fun_del_post($id) {
	if ($id == null) {
		return true;
	}
	$id = (int) $id;
	$query = "DELETE FROM `posts` where id = ${id}";

	$conn = mysqli_connect('localhost',  'root', '', 'thumela_db');
	if (mysqli_query($conn, $query)) {
		mysqli_close($conn);
		return true;
	} 
	else {
		mysqli_close($conn);
		return mysqli_error($conn);
	}

	
}


// Deletes category by id
function fun_del_category($id = null){
	if ($id == null) {
		return true;
	}
	$id = (int) $id;
	//echo "here";
	$query = "DELETE FROM `categories` where id = ${id}";

	$conn = mysqli_connect('localhost',  'root', '', 'thumela_db');
	if (mysqli_query($conn, $query)) {
		mysqli_close($conn);
		return true;
	} 
	else {
		mysqli_close($conn);
		return mysqli_error($conn);
	}


	
}


function get_posts($id = null, $cat_id = null) {
	$conn = mysqli_connect('localhost',  'root', '', 'thumela_db'); 
	$posts = array();
	$query = "SELECT posts.id AS post_id, categories.id AS category_id, title, contents, date_posted, categories.name FROM posts INNER JOIN categories ON categories.id = posts.cat_id ";
	
	if ( isset($id) ) {
		$id = (int) $id;
		$query .= " WHERE `posts` . `id` = {$id}";
	}

	if (isset($cat_id) ){
		$cat_id = (int) $cat_id;
		$query .= " WHERE `cat_id` = {$cat_id}";
	}

	$query .= " ORDER BY `posts` . `id` DESC";

	$resultSet = mysqli_query($conn,$query);

	while ($row = mysqli_fetch_assoc($resultSet) ) {
		$posts[] = $row;
	}

	mysqli_close($conn);
	return $posts;

	
}

function get_categories($id = null){
	$categories = array();


	$conn = mysqli_connect('localhost',  'root', '', 'thumela_db');
	$resultSet = mysqli_query($conn," SELECT id, name FROM categories ");

	// $query = mysql_query(" SELECT id, name FROM categories ");

	while ($row = mysqli_fetch_assoc($resultSet) ) {
		$categories[] = $row;
	}

	mysqli_close($conn);
	return $categories;

	
}

function fun_get_category($id = null){
	$category = '';
	$conn = mysqli_connect('localhost', 'root', '', 'thumela_db');
	$resultSet = mysqli_query($conn, " SELECT name FROM categories where `id` = ${id}");

	while ($row = mysqli_fetch_assoc($resultSet)) {
		$category .= $row['name'];
		// print_r($row);
	}

	// echo "in function -- ";
	// print_r ($category);
	return $category;

	mysqli_close($conn);
}

// For add_category

function fun_add_category($name){
	$catName = $name;
	$conn = mysqli_connect('localhost', 'root', '', 'thumela_db');
	mysqli_query($conn, "INSERT INTO categories SET name = '{$name}'");

	mysqli_close($conn);
}


function category_exists($value) {
	$conn = mysqli_connect('localhost', 'root', '', 'thumela_db'); 
	$value = $value;
	$q = "SELECT * FROM categories";
	$resultSet = mysqli_query($conn,$q);
	while ($row = mysqli_fetch_assoc($resultSet)) {
		if(strtolower($value) == strtolower($row['name']))	return true;
	}
	return false;

	mysqli_close($conn);
}