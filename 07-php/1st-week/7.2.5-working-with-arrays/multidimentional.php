<?php

// Using PHP array() function
// Multidimentional Array
$people = array(
    "person1" => array(
        "name" => "Aung Aung",
        "age" => 25
    ),
    "person2" => array(
        "name" => "Maung Maung",
        "age" => 30
    )
);

// echo '<pre>';
// var_dump($people);
// echo '</pre>';
// die;



// Using []
$people = [
    [
        "Aung Aung",
        21
    ],
    [
        "Maung Maung",
        25
    ],
    [
        "Naung Naung",
        30
    ]
];


echo $people[2][1]."<br>";