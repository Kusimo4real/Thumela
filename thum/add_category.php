<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("resources/init.php");
$error = '';
$success = '';




if ( isset($_POST['name']) && !empty($_POST['name']) ) {
	$catName = trim($_POST['name']);
	if ( empty($catName) ){
		// echo 1;
		$error = 'You must submit a category name.';
	} 
	$res = category_exists($catName);
	if ($res) {
		// echo 2;
		$error = 'That category already exists.';
	} 
	else if ( strlen($catName) > 24 ) {
		// echo 3;
		$error = ' Category names can be max 24 characters.' ;
	}

	if (empty($error)) {
		fun_add_category($catName);
		header("location: success.php?type=add");
	}
}

?>

<!DOCTYPE html>
	<html lang="en">

<head>
	<title>Add Category</title>
	<?php include "includes/_head.php" ?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span6 offset3">
			<h1>Add Category</h1>
				<br>
				<?php include "includes/_nav.php" ?>

				<?php
				if ( isset($errors) && ! empty($errors) ) {
					echo '<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><ul><li>', implode('<li></li>', $errors), '</li></ul></div>';
				}
				?>
			<hr>
			<br>
			<form method="post">
					<div>
						<label class="control-label" for="inputError"><h3> Name</h3> </label>
						<input type="text" name="name" value="">
						<?php
							if (!empty($error)) {
								echo "<span class='help-inline'><i class='icon-exclamation'>&nbsp;</i>$error</span>";
							}
						?>
					<br>
					<br>	
					<div>
						<input type="submit" value="Add Category" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
<html>