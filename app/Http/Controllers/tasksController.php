<?php
session_start();

$title = $_POST['title'];
$status = $_POST['status'];
$department = $_POST['department'];
$deadline = $_POST['deadline'];
$created_by = $user['id'];

require_once "../../../backend/conn.php";

// fetch user id
$query = "SELECT * FROM login_data WHERE email = :email";

$statement = $conn->prepare($query);

$statement->execute([
    ":email" => $email,
]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

// insert tasks into database
$query2 = "INSERT INTO taken (title, status, department, deadline)
VALUES(:title, :status, :department, :deadline)";

$statement2 = $conn->prepare($query2);

$statement2->execute([
    ":title" => $title,
    ":status" => $status,
    ":department" => $department,
    ":deadline" => $deadline,
]);

header("Location: ../../../tasks/index.php");