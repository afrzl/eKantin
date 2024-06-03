<nav class="desktop-navigation-menu">
    <div class="container">
        <ul class="desktop-menu-category-list">
            <li class="menu-category"> <a href="<?= BASE_URL ?>" class="menu-title">Home</a> </li>
            <?php foreach ($categories as $category) { ?>
                <li class="menu-category"> <a href="<?= BASE_URL ?>/category/<?= $category['slug'] ?>" class="menu-title"><?= $category[
                        'name'
                    ] ?></a> </li>
            <?php } ?>
        </ul>
    </div>
</nav>
<div class="mobile-bottom-navigation"> <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
    </button> <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon> <span class="count bag-count"><?= isset($_SESSION['id'])
            ? $cart_count
            : '0' ?></span>
    </button> <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
    </button> <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon> <span class="count">0</span>
    </button> <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
    </button> </div>
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
                <a href="<?= BASE_URL ?>/category/<?= $category['slug'] ?>" class="accordion-menu">
                    <p class="menu-title"><?= $category['name'] ?></p>
                </a>
            </li>
        <?php } ?>
    </ul>
    <div class="menu-bottom">
        <ul class="menu-social-container">
            <li> <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a> </li>
            <li> <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a> </li>
            <li> <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a> </li>
            <li> <a href="#" class="social-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a> </li>
        </ul>
    </div>
</nav>
</header>