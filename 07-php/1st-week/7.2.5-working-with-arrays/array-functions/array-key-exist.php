<?php

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


if(array_key_exists("a", $students)){
    echo "OK";
}else{
    echo "NG";
}