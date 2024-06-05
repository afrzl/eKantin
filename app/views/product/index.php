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
                                    <button class="add-cart-btn"
                                        onclick="addToCart(<?= $data['product']['id'] ?>, 1)">PESAN SEKARANG</button>
                                    <div class="showcase-status">
                                        <div class="wrapper">
                                            <p>
                                                Tersedia: <b>20</b>
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
                                    <div class="showcase-banner">
                                        <img src="<?= ASSETS ?>/images/products/geprek.png" alt="<?= $product['name'] ?>"
                                            width="300" class="product-img default">
                                        <img src="<?= ASSETS ?>/images/products/geprek.png" alt="<?= $product['name'] ?>"
                                            width="300" class="product-img hover">
                                        <div class="showcase-actions">
                                            <button class="btn-action">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </button>
                                            <?php if (isset($_SESSION['id'])) { ?>
                                                <button onclick="addToCart(<?= $product['id'] ?>, 2)" class="btn-action">
                                                    <ion-icon name="bag-handle-outline"></ion-icon>
                                                </button>
                                            <?php } else { ?>
                                                <a href="<?= BASE_URL ?>/login" class="btn-action">
                                                    <ion-icon name="bag-handle-outline"></ion-icon>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
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
                        alert('Success menambahkan ke keranjang');
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
    <?php } ?>
</script>