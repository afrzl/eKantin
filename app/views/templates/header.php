<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eKantin</title>
    <link rel="shortcut icon" href="<?= ASSETS ?>/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="overlay" data-overlay></div>
    <div class="notification-toast" data-toast> <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>
        <div class="toast-banner"> <img src="<?= ASSETS ?>/images/products/jewellery-1.jpg" alt="Rose Gold Earrings"
                width="80" height="70"> </div>
        <div class="toast-detail">
            <p class="toast-message"> Someone in new just bought </p>
            <p class="toast-title"> Rose Gold Earrings </p>
            <p class="toast-meta"> <time datetime="PT2M">2 Minutes</time> ago </p>
        </div>
    </div>
    <header>
        <div class="header-main">
            <div class="container"> <a href="#" class="header-logo">
                    <h2>eKantin</h2>
                </a>
                <div class="header-search-container"> <input type="search" name="search" class="search-field"
                        placeholder="Cari makanan..."> <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button> </div>
                <div class="header-user-actions">
                    <a href="#" class="action-btn">
                        <ion-icon style="width: 20px" name="heart-outline"></ion-icon> <span class="count">0</span>
                    </a>
                    <a href="#" class="action-btn">
                        <ion-icon style="width: 20px" name="bag-handle-outline"></ion-icon> <span
                            class="count bag-count"><?= isset(
                            $_SESSION['id']
                        )
                            ? $cart_count
                            : '0' ?></span>
                    </a>
                    <?php if (isset($_SESSION['id'])) { ?>
                    <a href="#" class="action-btn">
                        <ion-icon style="width: 20px" name="person-outline"></ion-icon> <span class="header-user-name"><?= $_SESSION[
                                'name'
                            ] ?></span>
                    </a>
                    <?php } else { ?>
                    <a href="<?= BASE_URL ?>/login" class="action-btn">
                        <ion-icon style="width: 20px" name="person-outline"></ion-icon> <span
                            class="header-user-name">Login</span>
                    </a>
                    <?php } ?>

                </div>
            </div>
        </div>