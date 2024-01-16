<!-- <?php
        $is_admin = true;
        if ($is_admin) : ?>
    <h1>Form</h1>
    <form action="/action_page.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
    </form>
<?php else : ?>

    <h1>You donot have permission.</h1>

<?php endif; ?> -->

<?php

// declare(strict_types = 1);
/**
 * Control Structure or Conditional Statements
 * 1. If...Else
 * 2. If ... ElseIf...Else 
 * 3. Ternary Operator
 * 4. Switch
 * 5. Match
 */

/**
 * Loop Statements
 * 1. While
 * 2. Do...While 
 * 3. For
 * 4. Foreach
 */

 /**
  * Jump Statement
  * Continue
  * Break
  */


//   if($is_admin){
//     echo "OK";
//   }elseif($is_admin == 0){
//     echo "Zero";
//   }else{
//     echo "NG";
//   }
// $is_admin ? "OK" : "NG";

// With HTML

// $is_admin = true;
// switch ($is_admin) {
//     case "Hello":
//         echo "OK";
//         break;
//     case 0:
//         echo "ZERO";
//         break;
//     default:
//         echo "NG";
//         break;
// }
$day = date("D");
// echo $day . "\r\n";
// echo gettype($day);
// switch ($day) {
//     case 'Sun':
//         echo "Sunday";
//         break;
//     case 'Sat':
//         echo "Saturday";
//         break;
//     case 'Tue':
//         echo "Tuesday";
//         break;
//     default:
//         echo "";
//         break;
// }

// Match
// Identity Check (Datatype Check)

$fruit = 'abc';
$result = match ($fruit) {
    'orange' => 'This is a orange',
    'banana' => 'This is a banana',
    'true' => 'This is a apple',
    true => "This is true",
    default => "This is not match with anything."
};

// echo $result;

// 1. While

$fruits = array("Apple", "Banana", "Orange", "Grapes", "Watermelon");
$i = 2;

// while($i < count($fruits)){
//     echo $i . " : " . $fruits[$i] . "<br>";
//     $i++;
// }

// Do While

// do{
//     echo $fruits[$i] . "<br>";
//     $i++;
// }while($i < 4);

// For

// Foreach

$student_scores = array(
    "Kyaw Kyaw" => 95,
    "Bo Bo" => 87,
    "Chaw Chaw" => 92,
    "Zin Zin" => 78
);

// foreach ($student_scores as $name => $score) {
//     echo "$name scored $score marks.<br>";
// }

$counter = 0;
while ($counter < 5) {
    echo $counter . "<br>";
    $counter++;
    // echo $counter . "<br>";
    if ($counter == 3) {
        // echo "Continue" . "<br>";
        continue;
    }
    echo "Last line in loop: counter = $counter <br>";
}
echo "First line after loop";

?>