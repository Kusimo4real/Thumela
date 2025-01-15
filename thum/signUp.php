<?php
session_start();
require_once "db_config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $confirm_password = $_POST['confirm_password'];

    if ($_POST['password'] !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        $sql = "INSERT INTO users (first_name, last_name, phone, email, password) 
                VALUES ('$first_name', '$last_name', '$phone', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            header("Location: signIn.php");
            exit;
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Create Account</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form action="signUp.php" method="POST">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="signIn.php">Sign In</a></p>
    </div>
</body>
</html>
