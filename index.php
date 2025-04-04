<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepagina - Takenlijst</title>
    <link rel="stylesheet" href="public_html/css/main.css">
</head>
<body>
    
    <?php 
    require_once 'header.php' 
    ?>

    <div class="wrapper">
        <main>
            <img src="public_html/img/logo-big-v2.png" alt="developer land" class="bannerLogo">
            <h2 class="homepageTitle">Developerland heeft dé takenlijst voor jou!</h2>
            <p class="homepageText">Hou al je taken overzichtelijk bij op één plek</p>
        </main>
    </div>
    
</body>
</html>