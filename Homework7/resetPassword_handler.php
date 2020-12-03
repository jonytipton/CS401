<?php
session_start();
$loginError = "Incorrect email/pasword!";

require_once 'Dao.php';
$dao = new Dao();

if($dao->verifyUser($_POST['fName'], $_POST['lName'], $_POST['email'], $_POST['phone'])) {
    if($dao->resetPassword($_POST['email'], $_POST['password'])) {
        $_SESSION["loginSuccess"] = "Successfully reset password!";
        $_SESSION["authenticated"] = true;
        $_SESSION["resetSuccess"] = true;
        $_SESSION["accountFName"] = $_POST['fName'];
        $_SESSION["accountLName"] = $_POST['lName'];
        $_SESSION["accountEmail"] = $_POST['email'];
        $_SESSION["accountPhone"] = $_POST['phone'];

        header("location: https://peaceful-ravine-93431.herokuapp.com/account.php");
        //header("location: http://localhost/~Jonathan/CS401/account.php");
    }
    else {
        $_SESSION["resetError"] = "Unable to  Reset Password. Try Again.";
        header("location: https://peaceful-ravine-93431.herokuapp.com/resetPassword.php");
        //header("location: http://localhost/~Jonathan/CS401/resetPassword.php");
    }
}
else {
    $_SESSION["resetError"] = "Unable to  Verify Identity. Try Again.";
    header("location: https://peaceful-ravine-93431.herokuapp.com/resetPassword.php");
    //header("location: http://localhost/~Jonathan/CS401/resetPassword.php");
}