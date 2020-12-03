<?php
session_start();
$error = "Error";

require_once 'Dao.php';
$dao = new Dao();

    if (!$dao->validateName($_POST['fName'], $_POST['lName'])) {
        returnError("INCORRECT FORMAT: Only letters and white space allowed for first/last name.");
    }
    if (!$dao->validateEmail($_POST['email'])) {
        returnError("INCORECT FORMAT: Invalid email address.");
    }
    if (!$dao->validatePhone($_POST['phone'])) {
        returnError("INCORECT FORMAT: Invalid phone number. US format: ##########");
    }


if($dao->insertUser($_POST['lName'], $_POST['fName'], $_POST['email'], $_POST['password'], $_POST['phone'])) {
    $_SESSION['authenticated'] = true;
    $_SESSION['DisplayName'] = $_POST["fName"];
    //header("location: http://localhost/~Jonathan/CS401/shop.php");
    header("location: https://peaceful-ravine-93431.herokuapp.com/shop.php");
    exit();
    //successful creation
}
else {
    returnError("Email already in use!");
    //account not cretae
}

function returnError($error) {
    $_SESSION["error"] = $error;
    $_SESSION["fName"] = $_POST['fName'];
    $_SESSION["lName"] = $_POST['lName'];
    $_SESSION["newEmail"] = $_POST['email'];
    $_SESSION["newPassword"] = $_POST['password'];
    $_SESSION["phone"] = $_POST['phone'];
    header("location: https://peaceful-ravine-93431.herokuapp.com/login.php");
    exit();
}

?>