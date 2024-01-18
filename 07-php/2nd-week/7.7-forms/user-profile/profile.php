<?php

session_start();

if(isset($_SESSION['user'])){
    var_dump($_SESSION['user']);
    echo "<br>";
    echo "<a href='_actions/logout.php'>Logout</a>";
}else{
    echo "Session Not Found";
}
?>