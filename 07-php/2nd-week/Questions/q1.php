<?php
// Write a PHP function called findMax that takes an array of numbers as a parameter and returns the maximum value in the array. Use this function to find and print the maximum value in the given array: [45, 18, 72, 100, 35, 60, 90, 500, 300].

function findMax($arr = [])
{
    $max = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}
print findMax([45, 18, 72, 100, 35, 60, 90, 500, 300]);

// function findMax($arr){
//     return max($arr);
// }
// echo findMax([45, 18, 72, 35, 60, 90]);
