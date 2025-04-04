<?php
session_start();

$title = $_POST['title'];
$status = $_POST['status'];
$department = $_POST['department'];
$deadline = $_POST['deadline'];

require_once "../../../backend/conn.php";

// fetch user id

$created_by = $_SESSION['user_id'];

// insert tasks into database
$query2 = "INSERT INTO taken (title, department, deadline, created_by)
VALUES(:title, :department, :deadline, :created_by)";

$statement2 = $conn->prepare($query2);

$statement2->execute([
    ":title" => $title,
    ":department" => $department,
    ":deadline" => $deadline,
    ":created_by" => $created_by,
]);

header("Location: ../../../tasks/index.php");