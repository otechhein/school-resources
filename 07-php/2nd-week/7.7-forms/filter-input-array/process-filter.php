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

$filters = array(
    "username" => array(
        "filter" => FILTER_SANITIZE_STRING,
        "flags" => FILTER_FLAG_STRIP_HIGH
    ),
    "email" => FILTER_VALIDATE_EMAIL,
    "age"   => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array("min_range" => 1, "max_range" => 120)
    )
);

$input = filter_input_array(INPUT_POST, $filters);

// var_dump($input);die;

if ($input !== null && array_filter($input) !== $input) {
    echo "Invalid input!";
} else {
    echo "Username: " . $input['username'] . "<br>";
    echo "Email: " . $input['email'] . "<br>";
    echo "Age: " . $input['age'] . "<br>";
}
