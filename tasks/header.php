<header>
    <div class="headerContent">
        <nav>
            <div class="headerLeftContent">
                <img src="../public_html/img/logo-big-v4.png" alt="developer land" class="headerLogo">
            </div>

            <div class="headerRightContent">
                <?php if(isset($_SESSION['user_id'])) {?>
                    <a href="index.php?task=null" class="headerText">Takenlijst</a>
                <?php } ?>

                <?php if(isset($_SESSION['user_id'])) {?>
                    <a href="../app/Http/Controllers/logOutController.php" class="headerText">Uitloggen</a>
            </div>
            
            <?php } else {?>
                <div class="headerRightContent2">
                    <a href="../login.php"  class="headerText">Inloggen</a>
                </div>
            <?php } ?>
        </nav>
    </div>
</header>