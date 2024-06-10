<!--- SIDEBAR -->
<div class="sidebar  has-scrollbar" data-mobile-menu>
    <div class="sidebar-category">
        <div class="sidebar-top">
            <h2 class="sidebar-title">Daftar Kantin</h2> <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>
        <ul class="sidebar-menu-category-list">
            <?php foreach ($data['canteens'] as $canteen) { ?>
                <li class="sidebar-menu-category">
                    <button class="sidebar-accordion-menu">
                        <div class="menu-title-flex">
                            <ion-icon name="fast-food"></ion-icon>
                            <a href="<?= BASE_URL ?>/canteen/<?= $canteen['email'] ?>"
                                class="menu-title"><?= $canteen['name'] ?></a>
                        </div>
                    </button>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>