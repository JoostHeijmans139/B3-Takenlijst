<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

require_once '../../../backend/conn.php';

$query = "SELECT * FROM login_data WHERE email = :email";

$statement = $conn->prepare($query);

$statement->execute([
    ":email" => $email,
]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount() < 1)
{
    die("Error: account bestaat niet");
}

if(!password_verify($password, $user['password']))
{
    header("Location: ../../../login.php");
    die("Error: gebruikersnaam of wachtwoord niet juist!");
}

$_SESSION['user_id'] = $user['id'];


header("Location: ../../../tasks/index.php");