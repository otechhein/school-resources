<?php

// $filters = array(
//     "username" => array(
//         "filter" => FILTER_SANITIZE_STRING,
//         "flags" => FILTER_FLAG_STRIP_HIGH
//     ),
//     "email" => FILTER_VALIDATE_EMAIL,
//     "age"   => array(
//         "filter" => FILTER_VALIDATE_INT,
//         "options" => array("min_range" => 1, "max_range" => 120)
//     )
// );
// $filters = array(
//     "username" => array(
//         "filter" => FILTER_CALLBACK,
//         "flags" => FILTER_FORCE_ARRAY,
//         "options" => "ucwords"
//     ),
//     "age" => array(
//         "filter" => FILTER_VALIDATE_INT,
//         "options" => array(
//             "min_range" => 1,
//             "max_range" => 120
//         )
//     ),
//     "email" => FILTER_VALIDATE_EMAIL,
// );

// $input = filter_input_array(INPUT_POST, $filters);

// if ($input !== null && $input !== false) {
//     // Input is valid and sanitized
//     echo "Username: " . $input['username'] . "<br>";
//     echo "Email: " . $input['email'] . "<br>";
//     echo "Age: " . $input['age'] . "<br>";
// } else {
//     // Input is not valid
//     echo "Invalid input!";
// }

// $filters = array(
//     'username' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
//     'email' => FILTER_VALIDATE_EMAIL,
//     'age' => array(
//         'filter' => FILTER_VALIDATE_INT,
//         'options' => array(
//             'min_range' => 18,
//             'max_range' => 99
//         )
//     )
// );

// $input = filter_input_array(INPUT_POST, $filters);

// var_dump($input);die;


$username = $_POST['username'];
// $script = "<script>alert(1)</script>";
// $sanitized = preg_replace("/[^a-zA-Z0-9]/", "", $username);
$sanitized = filter_var($username, FILTER_SANITIZE_SPECIAL_CHARS);
echo "Value:" . $sanitized;
// echo "Value:" . $username;
exit;

if ($input !== null && array_filter($input) !== $input) {
    echo "Invalid input!";
} else {
    echo "Username: " . $input['username'] . "<br>";
    echo "Email: " . $input['email'] . "<br>";
    echo "Age: " . $input['age'] . "<br>";
}
