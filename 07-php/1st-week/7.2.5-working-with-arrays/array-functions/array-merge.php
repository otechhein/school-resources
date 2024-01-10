<?php
$car1 = [
    "BMW", 
    "Toyota",
    "Suzuki"
];

$car2 = [
    "Audi",
    "Ford",
    "Nissen"
];

$cars = array_merge($car1, $car2);

print_r($cars);