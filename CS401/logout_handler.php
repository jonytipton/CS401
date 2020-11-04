<?php
session_start();
session_destroy();
header("location: http://localhost/~Jonathan/CS401/shop.php");
//header("location: http://localhost/~Jonathan/CS401/shop.php");
exit();