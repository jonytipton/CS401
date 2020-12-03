<?php
session_start();

?>

<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <nav class="nav-container">
        <?php require("phpincludes/navbar.php") ?>
    </nav>
</header>

<body class="align-center ">
    <h1 class="margin-bottom-50px">Reset Account Password</h1>
    <form action="resetPassword_handler.php" method="post">
        <div class="form-container">
            <h1>Enter Account Credentials</h1>
            <?php
                if(isset($_SESSION["resetError"])) {
                    $resetError = $_SESSION["resetError"];
                    echo "<span>$resetError</span>";
                }
            ?>
            <label for="fname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="fName" required>

            <label for="lName"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lName" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phone" required>

            <label for="password"><b>New Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="password"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="password" required>

            <button type="submit">Reset Password</button>
        </div>
    </form>
    
</body>
<footer>
    <?php include("phpincludes/footer.php") ?>
</footer>

</html>