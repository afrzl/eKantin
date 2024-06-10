<main>
    <?php if (isset($data['page'])) { ?>
        <!--- BANNER -->
        <div class="banner">
            <div class="container">
                <div class="slider-container has-scrollbar">
                    <div class="slider-item"> <img src="<?= ASSETS ?>/images/gudeg.jpg" alt="women's latest fashion sale"
                            class="banner-img">
                        <div class="banner-content">
                            <p class="banner-subtitle"><?= $data['products'][0]['category_name'] ?> Trending</p>
                            <h2 class="banner-title"><?= $data['products'][0]['name'] ?></h2>
                            <p class="banner-text"> Dimulai dari
                                Rp<b><?= number_format($data['products'][0]['price'], 0, '', '.') ?></b> </p>
                            <a href="<?= BASE_URL ?>/product/<?= $data['products'][0]['slug'] ?>" class="banner-btn">Beli
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <!--- PRODUCT -->
    <div class="product-container">
        <div class="container">
            <?php require_once 'app/views/templates/sidebar.php' ?>
            <div class="product-box">
                <!--- PRODUCT FEATURED -->
                <div class="product-main">
                    <h2 class="title"><?= $data['subtitle'] ?></h2>
                    <div class="header-search-container" style="margin-bottom: 20px">
                        <input type="hidden" id="canteen_id" value="<?= $data['canteen_id'] ?>">
                        <input type="hidden" id="category_id" value="<?= $data['category_id'] ?>">
                        <input type="search" onkeyup="searchProduct()" name="search" id="search" class="search-field"
                            placeholder="Cari produk...">
                        <button class="search-btn" onclick="searchProduct()">
                            <ion-icon name="search-outline"></ion-icon>
                        </button>
                    </div>
                    <div class="product-grid" id="product-grid">
                        <?php if ($data['products'] == null) { ?>
                            <p><em>Tidak ada produk...</em></p>
                        <?php } else { ?>
                            <?php foreach ($data['products'] as $key => $product) { ?>
                                <div class="showcase">
                                    <a href="<?= BASE_URL ?>/product/<?= $product['slug'] ?>">
                                        <div class="showcase-banner" style="height: 10rem">
                                            <img src="<?= ASSETS . '/images/products/' . $product['image'] ?>"
                                                alt="<?= $product['name'] ?>" style="width: 100%" class="product-img default <?php if ($product['stock'] == 0)
                                                      echo 'image-habis' ?>">
                                                <img src="<?= ASSETS . '/images/products/' . $product['image'] ?>"
                                                alt="<?= $product['name'] ?>" style="width: 100%" class="product-img hover <?php if ($product['stock'] == 0)
                                                      echo 'image-habis' ?>">
                                            <?php if ($product['stock'] == 0) { ?>
                                                <p class="showcase-badge angle black">habis</p>
                                            <?php } ?>
                                        </div>
                                    </a>
                                    <div class="showcase-content">
                                        <a href="<?= BASE_URL ?>/category/<?= $product['category_slug'] ?>"
                                            class="showcase-category"><?= $product['category_name'] ?></a>
                                        <a href="<?= BASE_URL ?>/product/<?= $product['slug'] ?>">
                                            <h3 class="showcase-title"><?= $product['name'] ?></h3>
                                        </a>
                                        <div class="price-box">
                                            <p class="price">Rp<?= number_format($product['price'], 0, '', '.') ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</main>