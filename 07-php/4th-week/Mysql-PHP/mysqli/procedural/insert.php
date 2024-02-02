<?php

require_once "db.php";

$sql = "INSERT INTO users (company_name, contact_name, address, city, postal_code, country) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$company_name = "ABC Co.,Ltd";
$contact_name = "Maung Muang";
$address = "Tamwe";
$city = "Yangon";
$postal_code = 11011;
$country = "Myanmar";

$stmt->bind_param("ssssis", $company_name, $contact_name, $address, $city, $postal_code, $country);

$stmt->execute();

$stmt->close();
$conn->close();

echo "Inserting Successful";