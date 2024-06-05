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
</header>