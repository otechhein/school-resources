<?php

namespace App\Models;

class VehicleModel
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getVehicles()
    {
        $query = "SELECT * FROM vechicles";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll($this->pdo::FETCH_ASSOC);
    }
}
