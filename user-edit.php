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
    <title>Edit User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/auth.css">
</head>

<body>
    <form id="regForm" action="src/actions/user-crud/update.php" method="post">
        <h1>Edit User</h1>
        <div class="tab">
            <p><input name="id" value="<?php echo $_SESSION['id']; ?>" hidden></p>
            <p><input placeholder="First Name" type="text" name="name" required value="<?php echo $_SESSION['name']; ?>"></p>
            <p><input placeholder="Last Name" type="text" name="surname" required value="<?php echo $_SESSION['surname']; ?>"></p>
        </div>

        <div class="tab">
            <p>
                <select name="gender">
                    <option disabled selected><?php echo $_SESSION['gender']; ?></option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </p>

            <p>
                <select name="status">
                    <option disabled selected><?php echo $_SESSION['status']; ?></option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                </select>
            </p>
        </div>

        <div class="tab">
            <p><input placeholder="Insert Your N.I.F." type="text" name="nif" required value="<?php echo $_SESSION['nif']; ?>"></p>
            <p><input type="date" name="birth" required value="<?php echo $_SESSION['birth']; ?>"></p>
        </div>

        <div class="tab">
            <p>
                <select name="role">
                    <option disabled selected><?php echo $_SESSION['role']; ?></option>
                    <option value="none">None</option>
                    <option value="student">Student</option>
                    <option value="worker">Worker</option>
                </select>
            </p>

            <p><input placeholder="Insert Your Profession" type="text" name="profission" required value="<?php echo $_SESSION['profission']; ?>"></p>
        </div>

        <div class="tab">
            <p><input placeholder="Insert Your E-mail Address" type="email" name="email" required value="<?php echo $_SESSION['email']; ?>"></p>
            <p><input placeholder="Insert Your Password" type="password" name="password" required></p>
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
        <input type="submit" style="display: none" id="submitButton" name="edit">
    </form>
    <script src="src/js/edit-user.js"></script>
</body>

</html>