<?php

// $students = [
//     "Aung Aung",
//     "Maung Maung",
//     "Naung Naung"
// ];

// list($a, $b, $c) = $students; 
// var_dump($a);

// List Function does not work on associative array

// echo "Studnet1: $a"; // String Template

// echo "Hello" . "World"; // Concatination

// JS using ( + ) 

// Array destructuring PHP 7.1 >=

$students = [
    "a" => "Kaung Htet San", 
    "b" => "Lwin Naing Tun", 
    "c" => "Sithu Min Htet",
    "d" => "Hein Htut",
    "e" => "Aung Zaw Myo",
    "f" => "Nay Htet",
    "g" => "Lynn Myat",
    "h" => "Shun Shun",
    "i" => "Shunlae Nay Yee",
    "j" => "Hsu Aung",
];

["a"=> $a, "b" => $b, "c" => $c] = $students;
echo $a;


