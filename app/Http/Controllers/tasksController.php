<?php
session_start();

require_once "../../../backend/conn.php";

$title = $_POST['title'];
$status = $_POST['status'];
$department = $_POST['department'];
$deadline = $_POST['deadline'];
$created_by = $_SESSION['user_id'];
$action = $_POST['action'];

if($action == "create")
{
    $queryCreate = "INSERT INTO taken (title, department, deadline, created_by)
    VALUES(:title, :department, :deadline, :created_by)";

    $statementCreate = $conn->prepare($queryCreate);

    $statementCreate->execute([
        ":title" => $title,
        ":department" => $department,
        ":deadline" => $deadline,
        ":created_by" => $created_by,
    ]);

    header("Location: ../../../tasks/index.php?task=created");
}

if($action == "update")
{
    
}

if($action == "delete")
{
    
}


