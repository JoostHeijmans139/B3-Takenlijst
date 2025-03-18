<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account maken</title>
    <link rel="stylesheet" href="public_html/css/main.css">
</head>
<body>
    
    <?php 
    require_once 'header.php' 
    ?>


    <div class="wrapper">
        <div class="loginBox">
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Naam (Optioneel)" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="E-mailadres" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
            </div>

            <input type="submit" value="Account maken">

        </div>
    </div>
    
</body>
</html>