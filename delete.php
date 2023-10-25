<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: src/pages/auth/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Account</title>
</head>
<body>
    <h1>Delete Your Account</h1>
    <p>Are you sure you want to delete your account?</p>
    <form action="src/actions/user-crud/delete.php" method="post">
        <input type="submit" name="delete" value="Yes, Delete My Account">
    </form>
</body>
</html>
