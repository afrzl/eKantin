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
                                    <img src="<?= ASSETS ?>/images/products/<?= $data['product']['image'] ?>"
                                        style="width: 100%" alt="<?= $data['product']['name'] ?>" class="showcase-img">
                                </div>
                                <div class="showcase-content">
                                    <a>
                                        <h3 class="showcase-title"><?= $data['product']['name'] ?></h3>
                                    </a>
                                    <p class="showcase-desc">
                                        <?= $data['product']['description'] ?>
                                    </p>
                                    <div class="price-box">
                                        <p class="price">Rp<?= number_format($data['product']['price'], 0, '', '.') ?>
                                        </p>
                                    </div>
                                    <?php if ($data['product']['stock'] > 0): ?>
                                        <?php if (isset($_SESSION['id'])): ?>
                                            <button class="add-cart-btn"
                                                onclick="addToCart(<?= $data['product']['id'] ?>, 1)">PESAN SEKARANG</button>
                                        <?php else: ?>
                                            <button class="add-cart-btn"><a style="color: white"
                                                    href="<?= BASE_URL ?>/login">PESAN
                                                    SEKARANG</a></button>
                                        <?php endif ?>
                                    <?php else: ?>
                                        <button class="outstock-btn" disabled>PRODUK SEDANG HABIS</button>
                                    <?php endif ?>
                                    <div class="showcase-status">
                                        <div class="wrapper">
                                            <p>
                                                Tersedia: <b><?= $data['product']['stock'] ?></b>
                                            </p>
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
                        <?php foreach ($data['products'] as $product) {
                            if ($product['id'] != $data['product']['id']) {
                                ?>
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
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>
                                        <div class="price-box">
                                            <p class="price">Rp<?= number_format($product['price'], 0, '', '.') ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php if (isset($_SESSION['id'])) { ?>
    <script type="text/javascript">
        function addToCart(id, type) {
            xhttp = new XMLHttpRequest();
            const userId = <?= $_SESSION['id'] ?>;
            let body = "";
            body += "user_id=" + encodeURIComponent(userId);
            body += "&product_id=" + encodeURIComponent(id);
            body += "&qty=1";

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let res = JSON.parse(xhttp.responseText);
                    if (res.code === 200) {
                        toast("Sukses menambahkan barang ke keranjang");
                        document.querySelectorAll('.bag-count').forEach(function (bag) {
                            bag.innerText = res.msg;
                        });
                    } else {
                        alert(res.msg);
                    }
                }
            };

            xhttp.open("POST", "<?= BASE_URL ?>/cart/store", false);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(body);
        }
    </script>
<?php } ?>