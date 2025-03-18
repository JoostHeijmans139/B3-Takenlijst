<?php

$naam = $_POST['naam'];
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

require_once '../../../backend/conn.php';

$query = "INSERT INTO login_data (naam, email, wachtwoord)
VALUES(:naam, :email, :wachtwoord)";

$statement = $conn->prepare($query);

$statement->execute([
    ":naam" => $naam,
    ":email" => $email,
    ":wachtwoord" => $wachtwoord,
]);

