<?php
session_start();
?>

<html>

<head>
    <title>Jonathan Tipton - Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <nav class="nav-container">
        <?php require("phpincludes/navbar.php") ?>
    </nav>
</header>

<body class="align-center ">
    <?php
    //update this to a GET and use row from users table
    //currently works after a password reset but not on standard login ->account info
    $name = $_SESSION['accountFName'] . " " . $_SESSION['accountLName'];
    $email = $_SESSION['accountEmail'];
    $phone = $_SESSION['accountPhone'];
    ?>

    <h1 class="margin-bottom-50px">Account Information for <?php echo "$name"?> </h1>
    
    <h3>Alerts:</h3>
    <?php
    if (isset($_SESSION["loginSuccess"])) {
        $loginSuccess = $_SESSION["loginSuccess"];
        echo "<span>$loginSuccess</span>";
        unset($_SESSION['loginSuccess']);
    }
    else {
        echo "<span>No Alerts</span>";
    }
    ?>
    <h4>Email Address: <?php echo "$email"?></h4>
    <h4>Phone Number: <?php echo "$phone"?></h4>

    <h1><a href="shop.php">Return to Shop</a></h1>
</body>
<footer>
    <?php include("phpincludes/footer.php") ?>
</footer>

</html>