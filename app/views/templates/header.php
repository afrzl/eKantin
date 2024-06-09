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

    <link rel="stylesheet" href="<?= ASSETS ?>/css/toastify.css">
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-7z297lBoO1-t8kDj"></script>
</head>

<body>
    <div style="min-height: 84vh !important;">
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
                <div class="container"> <a href="<?= BASE_URL ?>" class="header-logo">
                        <h2>eKantin</h2>
                    </a>
                    <div class="header-user-actions">
                        <a href="<?= BASE_URL ?>/cart" class="action-btn">
                            <ion-icon style="width: 20px" name="bag-handle-outline"></ion-icon> <span
                                class="count bag-count"><?= isset(
                                    $_SESSION['id']
                                )
                                    ? ($cart_count
                                        ? $cart_count
                                        : '0')
                                    : '0' ?></span>
                        </a>
                        <?php if (isset($_SESSION['id'])) { ?>
                            <ul class="desktop-menu-category-list">
                                <li class="menu-category">
                                    <a href="#" class="action-btn">
                                        <ion-icon style="width: 20px" name="person-outline"></ion-icon> <span
                                            class="header-user-name"><?= $_SESSION[
                                                'name'
                                            ] ?></span>
                                    </a>
                                    <ul class="dropdown-list">
                                        <?php if ($_SESSION['role'] == 'CANTEEN') { ?>
                                            <li class="dropdown-item">
                                                <a href="<?= BASE_URL ?>/c/dashboard"
                                                    style="display: flex; gap: 10px; align-items: center">
                                                    <ion-icon style="width: 20px;" name="list-outline"></ion-icon> Kantin Menu
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <li class="dropdown-item">
                                            <a href="<?= BASE_URL ?>/order"
                                                style="display: flex; gap: 10px; align-items: center">
                                                <ion-icon style="width: 20px;" name="list-outline"></ion-icon> Riwayat
                                                Pesanan
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="<?= BASE_URL ?>/login/out"
                                                style="display: flex; gap: 10px; align-items: center">
                                                <ion-icon style="width: 20px;" name="log-out-outline"></ion-icon>Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <a href="<?= BASE_URL ?>/login" class="action-btn">
                                <ion-icon style="width: 20px" name="person-outline"></ion-icon> <span
                                    class="header-user-name">Login</span>
                            </a>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="mobile-bottom-navigation">
                <button class="action-btn" data-mobile-menu-open-btn>
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
                <a href="<?= BASE_URL ?>/cart" class="action-btn">
                    <ion-icon name="bag-handle-outline"></ion-icon>
                    <span class="count bag-count"><?= isset(
                        $_SESSION['id']
                    )
                        ? ($cart_count
                            ? $cart_count
                            : '0')
                        : '0' ?></span>
                </a>
                <a href="<?= BASE_URL ?>" class="action-btn">
                    <ion-icon name="home-outline"></ion-icon>
                </a>
                <a href="<?= BASE_URL ?>/order" class="action-btn">
                    <ion-icon name="list-outline"></ion-icon>
                </a>
                <button class="action-btn" data-mobile-menu-open-btn>
                    <ion-icon name="grid-outline"></ion-icon>
                </button>
            </div>
            <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
                <div class="menu-top">
                    <h2 class="menu-title">Menu</h2> <button class="menu-close-btn" data-mobile-menu-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>
                <ul class="mobile-menu-category-list">
                    <li class="menu-category"> <a href="<?= BASE_URL ?>" class="menu-title">Home</a> </li>
                    <?php foreach ($categories as $category) { ?>
                        <li class="menu-category">
                            <a href="<?= BASE_URL ?>/category/<?= $category[
                                  'slug'
                              ] ?>" class="accordion-menu">
                                <p class="menu-title"><?= $category['name'] ?></p>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if(isset($_SESSION['id'])) {
                            if ($_SESSION['role'] == 'canteen') { ?>
                                <li class="menu-category"> <a href="<?= BASE_URL ?>/c/dashboard" class="menu-title">Halaman Kantin</a> </li>
                    <?php } } ?>
                </ul>
                <div class="menu-bottom">
                    <ul class="menu-social-container">
                        <?php if (isset($_SESSION['id'])) { ?>
                            <li class="menu-category"> <a href="<?= BASE_URL ?>/login/out" class="menu-title">Logout</a> </li>
                        <?php } else { ?>
                            <li class="menu-category"> <a href="<?= BASE_URL ?>/login" class="menu-title">Login</a> </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>