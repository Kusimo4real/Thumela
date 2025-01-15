<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once('resources/init.php');

$posts = get_posts(((isset($_GET['id'])) ? $_GET['id'] : null));

?>

<!DOCTYPE html>
<html lang="en">


<head>
	<title>thumela</title>
	<?php include "includes/_head.php" ?>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="span6 offset3">
				
				<br>
				<?php include "includes/_nav.php" ?>
				<hr>
				<br>

				<?php
				foreach ( $posts as $post ) {
					//echo json_encode($post);
					if ( ! category_exists('name', $post ['name'] ) ){
						$post['name'] = 'Uncategorised';
					}
					?>

					<div class="post">
						<h2><i class="icon-quote-left">&nbsp;&nbsp;</i><a href="index.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['title']; ?></a></h2>
						<small> Posted on <?php echo date('d-m-Y h:i:s', strtotime($post['date_posted'])); ?>
							in <a href="category.php?id=
								<?php echo $post['category_id']; ?>">
								
								<?php 
									$post_category = fun_get_category($post['category_id']);
									// echo $post['name'];
									echo $post_category;
								?>
							
							</a>
						</small>
						<p class="post-content"><?php 
							if(isset($_GET['id'])){
								// nl2br adds </br> wherever '\n' is used.
								echo nl2br($post['contents']);
							}
							else	echo substr(nl2br($post['contents']),0,60)."...";
						?></p>

						<div class="post-functions">
							<ul>
								<li><a href="delete_post.php?id=<?php echo $post["post_id"]; ?>">Delete this post</a></li>
								<li><a href="edit_post.php?id=<?php echo $post['post_id']; ?>"> Edit post</a></li>
							</ul>
						</div>
						<br />
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>