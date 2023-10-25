<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/auth.css">
</head>
<body>
  <form id="regForm" action="../../actions/auth/sign-up.php" method="post">
    <h1>Create Account</h1>
    <div class="tab">
      <p><input placeholder="First Name" type="text" name="name" required oninput="this.className = ''"></p>
      <p><input placeholder="Last Name" type="text" name="surname" required oninput="this.className = ''"></p>
    </div>
    
    <div class="tab">
      <p>
        <select name="gender">
          <option value="none" disabled selected>Select Your Gender</option>
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select>
      </p>
      
      <p>
        <select name="status">
          <option value="none" disabled selected>Select Your Status</option>
          <option value="solteiro">Solteiro</option>
          <option value="casado">Casado</option>
          <option value="divorciado">Divorciado</option>
          <option value="viuvo">Viúvo</option>
        </select>
      </p>
    </div>
    
    <div class="tab">
      <p><input placeholder="Insert Your N.I.F." type="text" name="nif" required oninput="this.className = ''"></p>
      <p><input type="date" name="birth" required></p>
    </div>
    
    <div class="tab">
      <p>
        <select name="role">
          <option value="none" disabled selected>Select Your User Role</option>
          <option value="none">None</option>
          <option value="student">Student</option>
          <option value="worker">Worker</option>
        </select>
      </p>
      
      <p><input placeholder="Insert Your Profession" type="text" name="profission" required oninput="this.className = ''"></p>
    </div>
    
    <div class="tab">
      <p><input placeholder="Insert Your E-mail Address" type="email" name="email" required oninput="this.className = ''"></p>
      <p><input placeholder="Insert Your Password" type="password" name="password" required oninput="this.className = ''"></p>
    </div>
    
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
    
    <!-- Botão de envio oculto -->
    <input type="submit" style="display: none" id="submitButton" name="sign-up">
  </form>
  <script src="../../js/sign-up-script.js"></script>
</body>
</html>
