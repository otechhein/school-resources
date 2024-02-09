<?php

session_start();

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){  
    $email = $_POST['email'];
    $password = md5($_POST['password']);
}

// echo $email . "<br>";
// echo $password;

$table = new UsersTable(new MySQL());

$user = $table->findByEmailAndPassword($email, $password);

// var_dump($user);die;

//if ($user) {

//	if ($table->suspended($user->id)) {
//		HTTP::redirect("/index.php", "suspended=1");
//	}
//
//	$_SESSION['user'] = $user;
//	HTTP::redirect("/profile.php");
//} else {
//	HTTP::redirect("/index.php", "incorrect=1");
//}

// var_dump($user);exit;

if ($user){
    if($user->suspended === 1){
         HTTP::redirect("/index.php","suspended=1");
    }else{
        $_SESSION['user'] = $user;
    	HTTP::redirect("/profile.php");
    }
    
} else {
    HTTP::redirect("/index.php","incorrect=1");
}
