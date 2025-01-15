<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once('resources/init.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blogistan</title>
	<?php include "includes/_head.php" ?>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="span6 offset3">
				<h1>Sucess</h1>
				<br>
				<?php include "includes/_nav.php" ?>
				<hr>
				<br>
				<div class="content">
					<h2 align="center">
					<?php
						if ($_GET['type'] == 'delete') {
							echo "Error occured while deleting!";
						} 
						else if ($_GET['type'] == 'add') {
							echo "Error occured while adding!";
						}
						else if ($_GET['type'] == 'edit') {
							echo "Error occured while submiting!";
						}
					?>
						
					</h2>
				</div>
                




			</div>
		</div>
	</body>
	</html>