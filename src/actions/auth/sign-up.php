<?php
// Inclua o arquivo de configuração do banco de dados
include("../connection.php");

$name = mysqli_real_escape_string($connection, $_POST["name"]);
$surname = mysqli_real_escape_string($connection, $_POST["surname"]);

$gender = mysqli_real_escape_string($connection, $_POST["gender"]);
$status = mysqli_real_escape_string($connection, $_POST["status"]);

$nif = mysqli_real_escape_string($connection, $_POST["nif"]);
$birth = mysqli_real_escape_string($connection, $_POST["birth"]);

$role = mysqli_real_escape_string($connection, $_POST["role"]);
$profission = mysqli_real_escape_string($connection, $_POST["profission"]);

$email = mysqli_real_escape_string($connection, $_POST["email"]);
$password = mysqli_real_escape_string($connection, $_POST["password"]);

$submit = mysqli_real_escape_string($connection, $_POST['sign-up']);

$sql = "INSERT INTO `users` (`name`, `surname`, `nif`, `status`, `birth`, `role`, `profission`, `password`, `email`)
        VALUES ('$name', '$surname', '$nif', '$status', '$birth', '$role', '$profission', '$password', '$email')";


if(isset($submit)){
    if ($connection->query($sql) == TRUE) {
        // Inserção bem-sucedida, redirecione para a página de sucesso
        header("Location: ../../pages/success/sign-up-success.php");
    } else {
        // Erro na inserção, redirecione para a página de erro
        header("Location: ../../pages/error/sign-up-error.php");
    }
    
}

// Feche a conexão com o banco de dados
$connection->close();
