<?php
session_start();
if(!isset($_SESSION['user_id']))
{
    header("Location: ../login.php");
}

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

header("Cache-Control: post-check=0, pre-check=0", false);

header("Pragma: no-cache");
 
?>

<!-- 1. Kolom "created by" maken
2. één grote query maken om alle taken op te halen
3. for each loop maken voor elke task type -->


<?php 
$titel = $_POST['titel'];
$status = $_POST['status'];
$afdeling = $_POST['afdeling'];
$created_by = $_POST['created_by'];

require_once "../backend/conn.php";

$query = "SELECT * FROM taken
VALUES(:titel, :status, :afdeling, :created_by)";

$statement = $conn->prepare($query);

$statement->execute([
    
]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

echo $user;
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takenlijst</title>
    <link rel="stylesheet" href="../public_html/css/main.css">
    <script src="https://kit.fontawesome.com/1b7f40349a.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php 
    require_once 'header.php' 
    ?>

    <div class="wrapper">
        <main>
            <button class="createButton" onclick="openForm()">Nieuwe taak</button>

            <?php 
            require_once 'create.php'
            ?>
        
            <div class="taskColumns">
                <div class="taskColumn">
                    <h2>To do</h2>
                
                    <div class="tasks">
                        <div class="taskAlign">
                            <p class="taskName">Taaknaam</p>
                            <a href="" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                        
                        <p class="departmentName">Afdeling</p>
                        <p class="deadlineName">Deadline: 28-4-2025</p>
                    </div>

                </div>

                <div class="taskColumn">
                    <h2>Doing</h2>
                                
                    <div class="tasks">
                        <div class="taskAlign">
                            <p class="taskName">Taaknaam</p>
                            <a href="" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                        
                        <p class="departmentName">Afdeling</p>
                        <p class="deadlineName">Deadline: 28-4-2025</p>
                    </div>

                </div>

                <div class="taskColumn">
                    <h2>Done</h2>
                                
                    <div class="tasks">
                        <div class="taskAlign">
                            <p class="taskName">Taaknaam</p>
                            <a href="" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                        
                        <p class="departmentName">Afdeling</p>
                        <p class="deadlineName">Deadline: 28-4-2025</p>
                    </div>

                </div>
            </div>
        </main>
    </div>

    <script>
        function openForm() {
        document.getElementById("createTask").style.display = "block";
        }
        function closeForm() {
        document.getElementById("createTask").style.display = "none";
        }
    </script>

</body>
</html>