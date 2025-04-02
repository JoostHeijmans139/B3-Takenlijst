<header>
    <div class="headerContent">
        <nav>
            <div class="headerLeftContent">
                <img src="../public_html/img/logo-big-v4.png" alt="developer land" class="headerLogo">
            </div>

            <div class="headerRightContent">
                <a href="index.php">Takenlijst</a>
                <?php if(isset($_SESSION['user_id'])) {?>
                <a href="../app/Http/Controllers/logOutController.php">Uitloggen</a>
                <?php } else {?>
                <a href="../login.php">Inloggen</a>
                <?php } ?>
            </div>

        </nav>
    </div>
</header>