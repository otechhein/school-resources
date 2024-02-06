<?php

require_once "db.php";

$sql = "INSERT INTO users (company_name, contact_name, address, city, postal_code, country) VALUES (?, ?, ?, ?, ?, ?)";

$statement = mysqli_prepare($conn, $sql);

// $stmt = $conn->prepare($sql);

$company_name = "ABC Co.,Ltd";
$contact_name = "Maung Muang";
$address = "Dagon";
$city = "Yangon";
$postal_code = 11011;
$country = "Myanmar";

// $stmt->bind_param("ssssis", $company_name, $contact_name, $address, $city, $postal_code, $country);
$arr = [
    $company_name, 
    $contact_name, 
    $address, 
    $city, 
    $postal_code, 
    $country
];
mysqli_stmt_bind_param($statement, "ssssis", $company_name, $contact_name, $address, $city, $postal_code, $country);

mysqli_stmt_execute($statement);

echo "Inserting Successful";
mysqli_stmt_close($statement);