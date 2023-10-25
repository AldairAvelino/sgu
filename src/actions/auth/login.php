<?php
include("../connection.php");

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$login = mysqli_real_escape_string($connection, $_POST['login']);

if(isset($login)){
    $search = mysqli_query($connection, "SELECT * FROM users WHERE email ='$email' AND password = '$password'")
        or die("FALHA AO BUSCAR");

    if (mysqli_num_rows($search) <= 0) {
        header("Location: ../../pages/error/login-error.php");
        die();
    } else {
        session_start();

        while ($linha = mysqli_fetch_array($search)) {
            $_SESSION["id"] = $linha['id'];
            $_SESSION["name"] = $linha['name'];
            $_SESSION["surname"] = $linha['surname'];
            $_SESSION["profission"] = $linha['profission'];
            $_SESSION["status"] = $linha['status'];
            $_SESSION["email"] = $linha['email'];
            $_SESSION["gender"] = $linha['gender'];
            $_SESSION["birth"] = $linha['birth'];
            $_SESSION["role"] = $linha['role'];
            $_SESSION["nif"] = $linha['nif'];
        }

        header("Location: ../../../user.php");
    }
}
