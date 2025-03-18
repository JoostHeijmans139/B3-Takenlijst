<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account maken</title>
    <link rel="stylesheet" href="public_html/css/main.css">

    <?php
    require_once 'backend/config.php';
    ?>
</head>

<body>
    <?php 
    require_once 'header.php' 
    ?>


    <div class="wrapper">
        <form action="app/Http/Controllers/signUpController.php" method="POST">
            <div class="loginBox">
                <h1>Account aanmaken</h1>
                <div class="form-group">
                    <input type="text" name="name" id="name" placeholder="Naam (Optioneel)" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="E-mailadres" required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" id="submit" value="Registreren">
                </div>
                
                <a href="login.php" class="accountQuestion">Heb je al een account?</a>
                

            </div>
        </form>
    </div>
    
</body>
</html>