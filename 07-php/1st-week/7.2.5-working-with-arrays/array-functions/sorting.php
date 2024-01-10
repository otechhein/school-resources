<?php

// $numbers = [1, 3, 2, 4, 5];
$students = [
    "Kaung Htet San", 
    "Lwin Naing Tun", 
    "Sithu Min Htet",
    "Hein Htut",
    "Aung Zaw Myo",
    "Nay Htet",
    "Lynn Myat",
    "Shun Shun",
    "Shunlae Nay Yee",
    "Hsu Aung",
];

$person = array(
    "name" => "Aung Aung",
    "age" => 25
);
 
// sort() 
// sort($numbers);
// sort($names);
// print_r($numbers);
// print_r($names);

// rsort()
// rsort($names);
// print_r($numbers);
// print_r($names);

// ksort
// ksort($person);
// print_r($person);

// asort
// asort($names);
// print_r($names);

// arsort
// arsort($names);
// print_r($names);

// krsort
// krsort($students);
// echo "<pre>";
// print_r($students);

// usort
function sorting($a, $b){
    if($a == $b){
        return 0;
    }
    return ($a < $b)? 1 : -1;
}

usort($students, "sorting");
echo "<pre>";
print_r($students);




