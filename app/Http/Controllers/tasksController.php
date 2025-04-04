<?php
session_start();

require_once "../../../backend/conn.php";

$title = $_POST['title'];
$status = $_POST['status'];
$department = $_POST['department'];
$deadline = $_POST['deadline'];
$created_by = $_SESSION['user_id'];
$action = $_POST['action'];
$id =$_POST['id'];


if($action == "cancel")
{
    header("Location: ../../../tasks/index.php");
}

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
    $queryUpdate = "UPDATE taken title = :title, status = :status, department = :department, deadline = :deadline";

    $statementUpdate = $conn->prepare($queryUpdate);

    $statementUpdate->execute([
        ":title" => $title,
        ":status" => $status,
        ":department" => $department,
        ":deadline" => $deadline,
    ]);

    header("Location: ../../../tasks/index.php?task=edited");
}

if($action == "delete")
{
    $queryDelete = "DELETE FROM taken WHERE id = :id";
    $statementDelete = $conn->prepare($queryDelete);
    $statementDelete->execute([
        ":id" => $id
    ]);
    header("Location: ../../../tasks/index.php?task=deleted");
}


