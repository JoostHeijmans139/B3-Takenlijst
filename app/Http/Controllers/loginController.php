<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require_once '../../../backend/conn.php';

$query = "SELECT * FROM login_data (name, email, password)
VALUES(:name, :email, :password)";

$statement = $conn->prepare($query);

$statement->execute([
    ":name" => $name,
    ":email" => $email,
    ":password" => $password,
]);