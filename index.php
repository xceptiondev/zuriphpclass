<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    </head>
<body>
Hi, <b><?php echo htmlspecialchars($_SESSION["first_name"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset_password.php">Reset Your Password</a>
        <a href="logout.php">Logout Of Your Account</a>
    </p>
</body>
</html>