<?php
class Dao {

    private $host = "us-cdbr-east-02.cleardb.com";
    private $db = "heroku_9b2e6120bd4e504";
    private $user = "b1592e5aed00ec";
    private $pass = "5bf3198e";

   public function getConnection() {
        try {
           $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
            return $conn;
        } 
        catch (Exception $e) {
            echo print_r($e,1);
            exit;
        }
    }  
    
    public function printUsers() {
        $conn = $this->getconnection();
        //echo print_r($conn,1);
        return $conn->query("select * from users");
    }

    public function insertUser($uLname, $uFname, $uEmail, $uPass, $uPhone) {
        $conn = $this->getConnection();
        $insertQuery = "INSERT INTO users (LastName, FirstName, emailAddress, userPassword, phoneNumber) VALUES (:lName, :fName, :email, :pass, :phone)";
        $q = $conn->prepare($insertQuery);
        $q->bindParam(":lName", $uLname); $q->bindParam(":fName", $uFname); $q->bindParam(":email", $uEmail); $q->bindParam(":pass", $uPass); $q->bindParam(":phone", $uPhone);
        $q->execute();
        print_r($q->fetch());
        if ($q->rowCount()>0){
            return true;
        }
        else return false;
    }

    public function userExists($email, $password) {
        $conn = $this->getConnection();
        $existsQuery = "SELECT FirstName from users WHERE emailAddress = :email AND userPassword = :pass";
        $q = $conn->prepare($existsQuery);
        $q->bindParam(':email', $email); $q->bindParam(':pass', $password);
        $q->execute();
        $result = $q->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }
        else {
            return null;
        }
    }

    public function verifyUser($fName, $lName, $email, $phone) {
        $conn = $this->getConnection();
        $existsQuery = "SELECT FirstName from users WHERE FirstName = :fName AND LastName = :lName AND emailAddress = :email AND phoneNumber = :phone";
        $q = $conn->prepare($existsQuery);
        $q->bindParam(':fName', $fName); $q->bindParam(':lName', $lName); $q->bindParam(':email', $email); $q->bindParam(':phone', $phone);
        $q->execute();
        $result = $q->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }
        else {
            return null;
        }
    }

    public function resetPassword($email, $newPass) {
        $conn = $this->getConnection();
        $existsQuery = "UPDATE users SET userPassword = :newPass WHERE emailAddress = :email";
        $q = $conn->prepare($existsQuery);
        $q->bindParam(':newPass', $newPass); $q->bindParam(':email', $email);
        $q->execute();
        if ($q->rowCount()>0) {
            return true;
        }
        else {
            print_r($q->fetchAll());
            return false;
            //error update query failed
        }
    }

    public function validateName($fName, $lName) {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fName)) {
            return false;
        }
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lName)) {
            return false;
        }
        return true;
    }

    public function validateEmail($email) {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function validatePhone($phone) {
        if (!preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/",$phone)) {
            return false;
        }
        return true;
    }
}

$dao = new Dao();
$userList = $dao->printUsers();
foreach ($userList as $users) {
    //echo print_r($users,1);
}
//echo "done\n";
