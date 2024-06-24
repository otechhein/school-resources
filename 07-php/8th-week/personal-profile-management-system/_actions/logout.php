<?php

session_start();

if(isset($_SESSION['loggedin'])){
    $_SESSION = array();
    session_destroy();
}

header("Location: ../login.php");
exit();