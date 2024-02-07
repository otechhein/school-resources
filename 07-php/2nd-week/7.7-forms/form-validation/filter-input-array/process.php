<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username']; // name
    // $password = $_POST['password'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    echo $username . "<br>" . $age . "<br>" . $email;
}
exit();

// print_r($_GET);

// Define the input data
// $input_data = array(
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
$filters = array(
    "username" => array(
        "filter" => FILTER_CALLBACK,
        "flags" => FILTER_FORCE_ARRAY,
        "options" => "ucwords"
    ),
    "email" => FILTER_VALIDATE_EMAIL,
    "age"   => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array("min_range" => 1, "max_range" => 120)
    )
);
// Use filter_input_array to filter and validate input data from $_POST
$input = filter_input_array(INPUT_POST, $filters);
var_dump($input);die;
if ($input) {
    // Input is valid and sanitized
    echo "Username: " . $input['username'] . "<br>";
    echo "Email: " . $input['email'] . "<br>";
    echo "Age: " . $input['age'] . "<br>";
} else {
    // Input is not valid
    echo "Invalid input!";
}
