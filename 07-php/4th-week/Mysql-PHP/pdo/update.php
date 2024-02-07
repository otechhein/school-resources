<?php

require_once "./db.php";

$sql = "UPDATE users SET company_name = :company_name, contact_name = :contact_name, address = :address, city = :city, postal_code = :postal_code, country = :country WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':company_name', $company_name, PDO::PARAM_STR);
$stmt->bindParam(':contact_name', $contact_name, PDO::PARAM_STR);
$stmt->bindParam(':address', $address, PDO::PARAM_STR);
$stmt->bindParam(':city', $city, PDO::PARAM_STR);
$stmt->bindParam(':postal_code', $postal_code, PDO::PARAM_INT);
$stmt->bindParam(':country', $country, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_STR);

$company_name = "Otech";
$contact_name = "Hein";
$address = "Tamwe";
$city = "Yangon";
$postal_code = 11011;
$country = "Myanmar";
$id = 30;

$stmt->execute();

echo "Updated Successfully";