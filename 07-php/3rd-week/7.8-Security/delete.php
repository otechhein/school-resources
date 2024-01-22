<?php

session_start();

if($_GET['csrf'] === $_SESSION['csrf']){
    echo "Good Request";
}else{
    echo "Bad Request";
}