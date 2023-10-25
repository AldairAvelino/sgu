<?php
session_start();

include("../connection.php");

if (!isset($_SESSION["email"])) {
    header("Location: ../../pages/auth/login.php");
}

$userID = $_SESSION["id"];
$delete = mysqli_real_escape_string($connection, $_POST['delete']);

if (isset($delete)) {

    // Execute a consulta para excluir o usuário com base no ID
    $deleteQuery = "DELETE FROM users WHERE id = $userID";

    if (mysqli_query($connection, $deleteQuery)) {
        // Excluiu com sucesso, redirecione o usuário para uma página de confirmação ou para fazer login novamente
        session_destroy(); // Destrua a sessão após a exclusão
        header("Location: ../../pages/success/user-deleted.php");
    } else {
        echo "Erro na exclusão: " . mysqli_error($connection);
    }
}