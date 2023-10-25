<?php
session_start();

if (!isset($_SESSION["email"])) {
  header("Location: src/pages/auth/login.php"); // Redireciona para a página de login se a sessão não estiver ativa
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>User Details</title>
  <link rel="stylesheet" href="src/css/user.css">
</head>

<body>
  <div class="container">
    <div class="profile-header">
      <div class="profile-img">
        <img src="./bg.jpg" width="200" alt="Profile Image">
      </div>
      <div class="profile-nav-info">
        <h3><span><?php echo ($_SESSION["name"]); ?></span> <span><?php echo ($_SESSION["surname"]); ?></span> <span><?php echo ($_SESSION["id"]); ?></span></h3>
        <div class="address">
          <p><?php echo ($_SESSION["profission"]); ?>,</p>
          <span><?php echo ($_SESSION["status"]); ?></span>
        </div>
      </div>
    </div>

    <div class="main-bd">
      <div class="left-side">
        <div class="profile-side">
          <p><i class="fa fa-envelope"></i> <?php echo ($_SESSION["email"]); ?></p>
          <p><i class="fa fa-phone"></i> <?php echo ($_SESSION["gender"]); ?></p>
          <p><i class="fa fa-phone"></i> <?php echo ($_SESSION["birth"]); ?></p>
          <p><i class="fa fa-phone"></i> <?php echo ($_SESSION["role"]); ?></p>
          <div class="user-bio">
            <h3><?php echo ($_SESSION["nif"]); ?></h3>
          </div>
          <div class="profile-btn">
            <a href="user-edit.php" class="editbtn" name="edit"><i class="fa fa-comment"></i> Edit User</a>
            <a href="delete.php" class="deletebtn" name="delete"><i class="fa fa-plus"></i> Delete</a>
            <a href="src/actions/auth/logout.php" class="logoutbtn" name="logoutbtn"><i class="fa fa-plus"></i> Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>