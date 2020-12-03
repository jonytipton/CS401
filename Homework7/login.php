<?php
session_start();
?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <nav class="nav-container">
        <?php require("phpincludes/navbar.php") ?>
    </nav>
</header>
<span class="about-text"><h1 >Shop Login</h1></span>
<body class="align-center">
    <form action="login_handler.php" method="post">
        <div class="form-container margin-bottom-50px margin-top-250px">
            <h1>LOGIN TO CURRENT ACCOUNT</h1>
            <?php
                if(isset($_SESSION["loginError"])) {
                    $loginError = $_SESSION["loginError"];
                    echo "<span>$loginError</span>";
                }
            ?>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value="<?php echo $_SESSION['email'];?>" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" value="<?php echo $_SESSION['password'];?>" required>
            <button type="submit">Login</button>
            <span class="psw">Forgot <a href="resetPassword.php">password?</a></span>
        </div>
    </form>
    <form action="createAccount_handler.php" method="post">
        <div class="form-container">
            <h1>CREATE NEW ACCOUNT</h1>
            <?php
                if(isset($_SESSION["error"])) {
                    $error = $_SESSION["error"];
                    echo "<span>$error</span><br>";
                }
            ?>
            <label for="fname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="fName" value="<?php echo $_SESSION['fName'];?>" required>

            <label for="lName"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lName" value="<?php echo $_SESSION['lName'];?>" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value="<?php echo $_SESSION['newEmail'];?>" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" value="<?php echo $_SESSION['newPassword'];?>" required>

            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phone" value="<?php echo $_SESSION['phone'];?>" required>

            <button type="submit">Create Account</button>
        </div>
    </form>
</body>
<footer>
    <?php include("phpincludes/footer.php") ?>
</footer>

</html>