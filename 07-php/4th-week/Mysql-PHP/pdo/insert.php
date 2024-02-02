<?php

require_once('./db.php');

$sql = "INSERT INTO users (company_name, contact_name, address, city, postal_code, country) VALUES (:company_name, :contact_name, :address, :city, :postal_code, :country)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bindParam(':company_name', $company_name, PDO::PARAM_STR);
$stmt->bindParam(':contact_name', $contact_name, PDO::PARAM_STR);
$stmt->bindParam(':address', $address, PDO::PARAM_STR);
$stmt->bindParam(':city', $city, PDO::PARAM_STR);
$stmt->bindParam(':postal_code', $postal_code, PDO::PARAM_INT);
$stmt->bindParam(':country', $country, PDO::PARAM_STR);

// Set parameter values
$company_name = "ABC Co.,Ltd";
$contact_name = "Maung Muang";
$address = "Tamwe";
$city = "Yangon";
$postal_code = 11011;
$country = "Myanmar";

// Execute the statement
$stmt->execute();

echo "Record inserted successfully.";
