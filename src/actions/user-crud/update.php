<?php

session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ../../pages/auth/login.php");
}

include("../connection.php");

$id = mysqli_real_escape_string($connection, $_POST["id"]);
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

$edit = mysqli_real_escape_string($connection, $_POST['edit']);

if(isset($edit)){

    $update_query = "UPDATE `users` SET `name`='$name',`surname`='$surname',`nif`='$nif',`status`='$status',`birth`='$birth',`role`='$role',`profission`='$profission',`password`='$password',`gender`='$gender',`email`='$email' WHERE `id` = '$id'";
    
    if(mysqli_query($connection, $update_query)){
        // Redirecione o usuário de volta à página do perfil ou a outra página apropriada após a atualização
        session_destroy();
        header("Location: ../../pages/success/user-details-updated.php");
    }else{
        // Trate qualquer erro que possa ocorrer durante a atualização
        echo "Erro na atualização: " . mysqli_error($connection);
    }

}

