<?php
session_start();
session_destroy();
header("Location: ../../pages/auth/login.php"); // Redirecione para a página de login após o logout.
