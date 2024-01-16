<?php
/**
 * 1. sqrt()
 * 2. pow()
 * 3. abs()
 * 4. round()
 * 5. ceil()
 * 6. floor()
 * 7. max()
 * 8. min()
 */

$num = 16;

$sqrt = sqrt($num); // Square root of 16 = 4
// echo $sqrt;
$power = pow($num, 2); // 16 raised to the power of 2 = 256
// echo $power;
$abs = abs(-25); // Absolute value of -25 = 25
// echo $abs;
$round = round(3.6); // Round 3.6 to the nearest integer = 4
// echo $round;

// $num = 4.5;
// echo round($num); // Output: 5
// echo ceil($num); // Output: 5
// echo floor($num); // Output: 4
// //using max and min with individual values
// echo max(5, 8, 2, 10, 3); // Output: 10
// echo min(5, 8, 2, 10, 3); // Output: 2
// //using max and min with an array
$numbers = [5, 8, 2, 10, 3];
echo max($numbers) . "<br>"; //Output: 10
echo min($numbers); //Output: 2
