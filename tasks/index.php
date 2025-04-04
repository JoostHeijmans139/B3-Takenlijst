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

            <?php
                require_once '../backend/conn.php';

                $query = "SELECT * FROM taken WHERE created_by = :created_by
                ORDER BY deadline = CURDATE() DESC, deadline > CURDATE() DESC, deadline ASC";

                $statement = $conn->prepare($query);

                $statement->execute([
                    ':created_by' => $_SESSION['user_id'],
                ]);

                $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

                $currentDate = new DateTime();
            ?>

            <div class="taskColumns">
            <div class="taskColumn">
                <h2>To do</h2>
                                
                <?php    
                    foreach ($tasks as $task): 
                    if($task['status'] === "to do"):
                ?>
                    <div class="taskHolder">
                        <?php     
                            require 'edit.php';
                            require 'task.php';
                        ?>
                    </div>
                <?php endif ?>
                <?php endforeach; ?>
            </div>

                <div class="taskColumn">
                    <h2>Doing</h2>
                                
                    <?php    
                        foreach ($tasks as $task): 
                        if($task['status'] === "doing"):
                    ?>
                    <div class="taskHolder">
                        <?php     
                            require 'edit.php';
                            require 'task.php';
                        ?>
                    </div>
                    <?php endif ?>
                    <?php endforeach; ?>
                </kHo>

                <div class="taskColumn">
                    <h2>Done</h2>
                                
                    <?php    
                        foreach ($tasks as $task): 
                        if($task['status'] === "done"):
                    ?>
                            <div class="taskHolder">
                            <?php     
                                require 'edit.php';
                                require 'task.php';
                            ?>
                        </div>
                    <?php endif ?>
                    <?php endforeach; ?>
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

        function toggleEdit() {
            event.target.closest(".taskHolder").children[0].classList.toggle("hide");
            event.target.closest(".taskHolder").children[1].classList.toggle("hide");
        }
    </script>

</body>
</html>

<?php if($_GET['task'] == "created")
    { ?>
        <script>
            setTimeout(function () {
                alert("Taak aangemaakt!")
            }, 25)
        </script>
    <?php } ?>

    <?php if($_GET['task'] == "edited")
    { ?>
        <script>
            setTimeout(function () {
                alert("Taak bewerkt!")
            }, 25)
        </script>
    <?php } ?>

<?php if($_GET['task'] == "deleted")
    { ?>
        <script>
            setTimeout(function () {
                alert("Taak verwijderd!")
            }, 25)
        </script>
    <?php } ?>