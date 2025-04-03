<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

require_once '../../../backend/conn.php';

$query = "INSERT INTO login_data (name, email, password)
VALUES(:name, :email, :password)";

$statement = $conn->prepare($query);

$statement->execute([
    ":name" => $name,
    ":email" => $email,
    ":password" => $hashedPassword,
]);

header("Location: ../../../login.php");