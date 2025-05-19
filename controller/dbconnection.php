<?php
$host = 'localhost';
$dbname = 'quickstay_hub';
$username = 'root';
$password = 'Sachi@123';

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $ex) {
    die("Database Connection Failed : " . $ex->getMessage());
}
?>