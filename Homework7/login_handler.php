<?php
session_start();
$loginError = "Incorrect email/pasword!";

require_once 'Dao.php';
$dao = new Dao();

$name = $dao->userExists($_POST['email'], $_POST['password']);
if ($name != null) {
    $_SESSION['authenticated'] = true;
    $_SESSION['DisplayName'] = $name["FirstName"];
    $_SESSION["accountEmail"] = $_POST['email'];
    $_SESSION["accountPhone"] = $dao->getPhone($_POST['email']);
    header("location: https://peaceful-ravine-93431.herokuapp.com/shop.php");
    //header("location: http://localhost/~Jonathan/CS401/shop.php");
} else {
    $_SESSION['authenticated'] = false;
    $_SESSION["loginError"] = $loginError;
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["password"] = $_POST['password'];
    header("location: https://peaceful-ravine-93431.herokuapp.com/shop.php");
    //header("location: http://localhost/~Jonathan/CS401/shop.php");
    //show error
}
exit;
?>