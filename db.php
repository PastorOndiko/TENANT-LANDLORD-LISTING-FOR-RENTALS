<?php
$host = "localhost"; // Change this to your database host
$dbname = "luckygat_komboa"; // Change this to your database name
$username = "luckygat_komboa"; // Change this to your database username
$password = "Pesamingi"; // Change this to your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
