<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Create User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/auth.css">
</head>

<body>
  <form id="regForm" action="../../actions/auth/login.php" method="post">
    <h1>Login</h1>
    
    <div>
      <p><input placeholder="Insert Your E-mail Address" type="email" name="email" required></p>
      <p><input placeholder="Insert Your Password" type="password" name="password" required></p>
      <button class="btn" type="submit" name="login">Login</button>
      <a href="sign-up.php">Create Account</a>
      <a href="../../../index.php">Home</a>
    </div>
    
  </form>
</body>

</html>