<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        $userModel = new UserModel($this->pdo);
        $users = $userModel->getUsers();

        include('../resources/views/users.php');
    }
}
