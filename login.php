<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="public_html/css/main.css">

    <?php
    require_once 'backend/config.php';
    ?>
</head>

<body>
    <?php
    require_once "header.php"
    ?>
    
    <div class="wrapper">
        <main>
            <form>
                <div class="loginBox">
                    <h1>Login bij de Takenlijst</h1>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="E-mailadres" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="Aanmelden">
                    </div>

                    <a href="signUp.php" class="accountQuestion">Nog geen account?</a>

                </div>
            </form>
        </main>
    </div>

</body>
</html>