<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/canteen/style.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
</head>

<body>
    <!-- Sidebar Section -->
    <?php require_once 'app/views/canteen/templates/sidebar.php' ?>
    <!-- End of Sidebar Section -->

    <!-- Main Content -->
    <main>
        <header>
            <h1>Analytics</h1>
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>

                <div class="profile">
                    <div class="info" style="text-align: right">
                        <p>Halo, <b><?= $_SESSION['name'] ?></b></p>
                        <small class="text-muted"><?= ucfirst(strtolower($_SESSION['role'])) ?></small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?= ASSETS ?>/images/profile-1.jpg">
                    </div>
                </div>

            </div>
        </header>
        <?= require_once 'app/views/' . $view . '.php' ?>
    </main>
    <!-- End of Main Content -->


    <script src="<?= ASSETS ?>/js/canteen/orders.js"></script>
    <script src="<?= ASSETS ?>/js/canteen/index.js"></script>
</body>

</html>