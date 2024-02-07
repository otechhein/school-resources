<?php

namespace App\Models;

class UserModel
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUsers()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll($this->pdo::FETCH_ASSOC);
    }
}
