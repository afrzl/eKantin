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
    <div class="product-showcase">
        <h3 class="showcase-heading">Diskon Paling Besar</h3>
        <div class="showcase-wrapper">
            <div class="showcase-container">
                <div class="showcase"> <a href="#" class="showcase-img-box"> <img src="<?= ASSETS ?>/images/gudeg.jpg"
                            alt="baby fabric shoes" width="75" height="75" class="showcase-img"> </a>
                    <div class="showcase-content"> <a href="#">
                            <h4 class="showcase-title">Gudeg Jogja</h4>
                        </a>
                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <div class="price-box"> <del>$5.00</del>
                            <p class="price">$4.00</p>
                        </div>
                    </div>
                </div>
                <div class="showcase"> <a href="#" class="showcase-img-box"> <img
                            src="<?= ASSETS ?>/images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img"
                            width="75" height="75"> </a>
                    <div class="showcase-content"> <a href="#">
                            <h4 class="showcase-title">men's hoodies t-shirt</h4>
                        </a>
                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half-outline"></ion-icon>
                        </div>
                        <div class="price-box"> <del>$17.00</del>
                            <p class="price">$7.00</p>
                        </div>
                    </div>
                </div>
                <div class="showcase"> <a href="#" class="showcase-img-box"> <img
                            src="<?= ASSETS ?>/images/products/3.jpg" alt="girls t-shirt" class="showcase-img"
                            width="75" height="75"> </a>
                    <div class="showcase-content"> <a href="#">
                            <h4 class="showcase-title">girls t-shirt</h4>
                        </a>
                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half-outline"></ion-icon>
                        </div>
                        <div class="price-box"> <del>$5.00</del>
                            <p class="price">$3.00</p>
                        </div>
                    </div>
                </div>
                <div class="showcase"> <a href="#" class="showcase-img-box"> <img
                            src="<?= ASSETS ?>/images/products/4.jpg" alt="woolen hat for men" class="showcase-img"
                            width="75" height="75"> </a>
                    <div class="showcase-content"> <a href="#">
                            <h4 class="showcase-title">woolen hat for men</h4>
                        </a>
                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <div class="price-box"> <del>$15.00</del>
                            <p class="price">$12.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>