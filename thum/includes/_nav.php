<?php
// Start the session
session_start();

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thumela_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is logged in
if (!isset($_SESSION['first_name'])) {
    header("Location: signIn.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <nav>
        <h1>Welcome to Thumela, <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?>!</h1>
        <ul class="btn-group">
            <li class="btn"><a href="index.php"><i class="icon-home">&nbsp;</i>Home</a></li>
            <li class="btn"><a href="category.php"><i class="icon-ellipsis-vertical">&nbsp;</i>Categories</a></li>
            <li class="btn"><a href="add_post.php"><i class="icon-plus-sign">&nbsp;</i>Add Post</a></li>
            <li class="btn"><a href="add_category.php"><i class="icon-star">&nbsp;</i>Add Category</a></li>
            <li class="btn"><a href="category_list.php"><i class="icon-list">&nbsp;</i>List Categories</a></li>
            <li>
                <form action="signin.php" method="POST">
                    <button type="submit" name="logout">Log Out</button>
                </form>
            </li>
        </ul>
    </nav>
</body>
</html>
