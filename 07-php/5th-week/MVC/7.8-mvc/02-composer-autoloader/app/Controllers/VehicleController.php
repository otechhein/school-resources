<?php

namespace App\Controllers;

use App\Models\VehicleModel;

class VehicleController
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        $vehiclesModel = new VehicleModel($this->pdo);
        $vehicles = $vehiclesModel->getVehicles();

        include('../resources/views/vehicles.php');
    }
}
