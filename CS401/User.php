<?php
class User {
    public $userName;
    public $password;

    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function saveUser($name = "", $pass = "default") {
        $file = 'users.txt';
        file_put_contents($file, "{$name}|{$pass}\n", FILE_APPEND | LOCK_EX);
    }

    public function printUser() {
        echo "Username {$this->userName} Password {$this->password}\n";
    }
}
?>