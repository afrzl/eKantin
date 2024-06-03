<main>
    <!--- PRODUCT -->
    <div class="product-container">
        <div class="container">
            <!--- SIDEBAR -->
            <?php require_once 'app/views/templates/sidebar.php' ?>
            <div class="product-box">
                <!--- PRODUCT FEATURED-->
                <div class="product-featured">
                    <div class="showcase-wrapper has-scrollbar">
                        <div class="showcase-container">
                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img src="<?= ASSETS ?>/images/products/geprek.png"
                                        alt="<?= $data['product']['name'] ?>" class="showcase-img">
                                </div>
                                <div class="showcase-content">
                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>
                                    <a href="#">
                                        <h3 class="showcase-title"><?= $data['product']['name'] ?></h3>
                                    </a>
                                    <p class="showcase-desc">
                                        <?= $data['product']['description'] ?>
                                    </p>
                                    <div class="price-box">
                                        <p class="price">Rp<?= number_format($data['product']['price'], 0, '', '.') ?>
                                        </p>
                                    </div>
                                    <button class="add-cart-btn">PESAN SEKARANG</button>
                                    <div class="showcase-status">
                                        <div class="wrapper">
                                            <p>
                                                Tersedia: <b>20</b>
                                            </p>
                                            <p>
                                                available: <b>40</b>
                                            </p>
                                        </div>
                                        <div class="showcase-status-bar"></div>
                                    </div>
                                    <div class="countdown-box">
                                        <p class="countdown-desc">
                                            Cepat pesan, toko tutup dalam:
                                        </p>
                                        <div class="countdown">
                                            <div class="countdown-content">
                                                <p class="display-number">360</p>
                                                <p class="display-text">Days</p>
                                            </div>
                                            <div class="countdown-content">
                                                <p class="display-number">24</p>
                                                <p class="display-text">Hours</p>
                                            </div>
                                            <div class="countdown-content">
                                                <p class="display-number">59</p>
                                                <p class="display-text">Min</p>
                                            </div>
                                            <div class="countdown-content">
                                                <p class="display-number">00</p>
                                                <p class="display-text">Sec</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- PRODUCT FEATURED -->
                <div class="product-main">
                    <h2 class="title">Produk Lainnya dari <?= $data['product']['canteen']['name'] ?></h2>
                    <div class="product-grid">
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/jacket-3.jpg"
                                    alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                                <img src="<?= ASSETS ?>/images/products/jacket-4.jpg" alt="Mens Winter Leathers Jackets"
                                    width="300" class="product-img hover">
                                <p class="showcase-badge">15%</p>
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">jacket</a> <a href="#">
                                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                                </a>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$48.00</p> <del>$75.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/shirt-1.jpg"
                                    alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                                <img src="<?= ASSETS ?>/images/products/shirt-2.jpg"
                                    alt="Pure Garment Dyed Cotton Shirt" class="product-img hover" width="300">
                                <p class="showcase-badge angle black">sale</p>
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">shirt</a>
                                <h3> <a href="#" class="showcase-title">Pure Garment Dyed Cotton Shirt</a> </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$45.00</p> <del>$56.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/jacket-5.jpg"
                                    alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                                <img src="<?= ASSETS ?>/images/products/jacket-6.jpg"
                                    alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover" width="300">
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">Jacket</a>
                                <h3> <a href="#" class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</a>
                                </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$58.00</p> <del>$65.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/clothes-3.jpg"
                                    alt="Black Floral Wrap Midi Skirt" class="product-img default" width="300">
                                <img src="<?= ASSETS ?>/images/products/clothes-4.jpg"
                                    alt="Black Floral Wrap Midi Skirt" class="product-img hover" width="300">
                                <p class="showcase-badge angle pink">new</p>
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">skirt</a>
                                <h3> <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a> </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$25.00</p> <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/shoe-2.jpg"
                                    alt="Casual Men's Brown shoes" class="product-img default" width="300"> <img
                                    src="<?= ASSETS ?>/images/products/shoe-2_1.jpg" alt="Casual Men's Brown shoes"
                                    class="product-img hover" width="300">
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">casual</a>
                                <h3> <a href="#" class="showcase-title">Casual Men's Brown shoes</a> </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$99.00</p> <del>$105.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/watch-3.jpg"
                                    alt="Pocket Watch Leather Pouch" class="product-img default" width="300">
                                <img src="<?= ASSETS ?>/images/products/watch-4.jpg" alt="Pocket Watch Leather Pouch"
                                    class="product-img hover" width="300">
                                <p class="showcase-badge angle black">sale</p>
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">watches</a>
                                <h3> <a href="#" class="showcase-title">Pocket Watch Leather Pouch</a> </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$150.00</p> <del>$170.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/watch-1.jpg"
                                    alt="Smart watche Vital Plus" class="product-img default" width="300"> <img
                                    src="<?= ASSETS ?>/images/products/watch-2.jpg" alt="Smart watche Vital Plus"
                                    class="product-img hover" width="300">
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">watches</a>
                                <h3> <a href="#" class="showcase-title">Smart watche Vital Plus</a> </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$100.00</p> <del>$120.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/party-wear-1.jpg"
                                    alt="Womens Party Wear Shoes" class="product-img default" width="300"> <img
                                    src="<?= ASSETS ?>/images/products/party-wear-2.jpg" alt="Womens Party Wear Shoes"
                                    class="product-img hover" width="300">
                                <p class="showcase-badge angle black">sale</p>
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">party wear</a>
                                <h3> <a href="#" class="showcase-title">Womens Party Wear Shoes</a> </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$25.00</p> <del>$30.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/jacket-1.jpg"
                                    alt="Mens Winter Leathers Jackets" class="product-img default" width="300">
                                <img src="<?= ASSETS ?>/images/products/jacket-2.jpg" alt="Mens Winter Leathers Jackets"
                                    class="product-img hover" width="300">
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">jacket</a>
                                <h3> <a href="#" class="showcase-title">Mens Winter Leathers Jackets</a> </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$32.00</p> <del>$45.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/sports-2.jpg"
                                    alt="Trekking & Running Shoes - black" class="product-img default" width="300">
                                <img src="<?= ASSETS ?>/images/products/sports-4.jpg"
                                    alt="Trekking & Running Shoes - black" class="product-img hover" width="300">
                                <p class="showcase-badge angle black">sale</p>
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">sports</a>
                                <h3> <a href="#" class="showcase-title">Trekking & Running Shoes - black</a>
                                </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$58.00</p> <del>$64.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/shoe-1.jpg"
                                    alt="Men's Leather Formal Wear shoes" class="product-img default" width="300">
                                <img src="<?= ASSETS ?>/images/products/shoe-1_1.jpg"
                                    alt="Men's Leather Formal Wear shoes" class="product-img hover" width="300">
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">formal</a>
                                <h3> <a href="#" class="showcase-title">Men's Leather Formal Wear shoes</a>
                                </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$50.00</p> <del>$65.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="showcase">
                            <div class="showcase-banner"> <img src="<?= ASSETS ?>/images/products/shorts-1.jpg"
                                    alt="Better Basics French Terry Sweatshorts" class="product-img default"
                                    width="300"> <img src="<?= ASSETS ?>/images/products/shorts-2.jpg"
                                    alt="Better Basics French Terry Sweatshorts" class="product-img hover" width="300">
                                <p class="showcase-badge angle black">sale</p>
                                <div class="showcase-actions"> <button class="btn-action">
                                        <ion-icon name="heart-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="repeat-outline"></ion-icon>
                                    </button> <button class="btn-action">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> </div>
                            </div>
                            <div class="showcase-content"> <a href="#" class="showcase-category">shorts</a>
                                <h3> <a href="#" class="showcase-title">Better Basics French Terry
                                        Sweatshorts</a>
                                </h3>
                                <div class="showcase-rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="price-box">
                                    <p class="price">$78.00</p> <del>$85.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>