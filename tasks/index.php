<?php
session_start();
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