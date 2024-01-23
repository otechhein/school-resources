<?php

$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];


if($error){
    header('location: ../profile.php');
    exit();
}

if($type === 'image/jpeg' || $type === 'image/jpg' || $type === 'image/png'){
    if(move_uploaded_file($tmp, "../photos/profile.jpg")){
        echo "Successful";
        header('location: ../profile.php');
        exit();
    }else{
        echo "Something Wrong";
    }
}else{
    header('location: ../profile.php?error=type');
}