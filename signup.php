<?php
session_start();
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signup_username = $_POST["signup_username"];
    $signup_email = $_POST["signup_email"];
    $signup_phone = $_POST["signup_phone"];
    $signup_password = $_POST["signup_password"];
    $signup_user_type = $_POST["signup_user_type"];

    $hashed_password = password_hash($signup_password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, phone, password, user_type) VALUES (:username, :email, :phone, :password, :user_type)");
    $stmt->bindParam(":username", $signup_username);
    $stmt->bindParam(":email", $signup_email);
    $stmt->bindParam(":phone", $signup_phone);
    $stmt->bindParam(":password", $hashed_password);
    $stmt->bindParam(":user_type", $signup_user_type);

    if ($stmt->execute()) {
        $_SESSION["user_id"] = $pdo->lastInsertId();
        if ($signup_user_type == "tenant") {
            header("Location: tenant.php");
        } else {
            header("Location: landlord.php");
        }
        exit();
    } else {
        echo "Error creating user.";
    }
}
?>
