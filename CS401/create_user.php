<?php
    require_once 'Dao.php';
    require_once 'User.php';

    $user = new User("jonytipton@outlook.com", "abc123");
    $dao = new Dao();
    $dao->saveUser($user);
    //$user = new User("jonathantipton@u.boisestate.edu");

    //$user ->printUser();
?>