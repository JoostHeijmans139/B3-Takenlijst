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
</head>
<body>
    
    <?php 
    require_once 'header.php' 
    ?>

    <div class="wrapper">
        <button class="createButton" onclick="openForm()">Nieuwe taak</button>

        <?php 
        require_once 'create.php'
        ?>

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