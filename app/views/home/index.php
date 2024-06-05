<main>
    <!--- BANNER -->
    <div class="banner">
        <div class="container">
            <div class="slider-container has-scrollbar">
                <div class="slider-item"> <img src="<?= ASSETS ?>/images/gudeg.jpg" alt="women's latest fashion sale"
                        class="banner-img">
                    <div class="banner-content">
                        <p class="banner-subtitle">Makanan Trending</p>
                        <h2 class="banner-title">Gudeg Jogja Yu Jum</h2>
                        <p class="banner-text"> Dimulai dari Rp<b>20</b>.000 </p> <a href="#" class="banner-btn">Beli
                            Sekarang</a>
                    </div>
                </div>
                <div class="slider-item"> <img src="<?= ASSETS ?>/images/soto.jpg" alt="modern sunglasses"
                        class="banner-img">
                    <div class="banner-content">
                        <p class="banner-subtitle">Trending accessories</p>
                        <h2 class="banner-title">Modern sunglasses</h2>
                        <p class="banner-text"> starting at &dollar; <b>15</b>.00 </p> <a href="#"
                            class="banner-btn">Shop now</a>
                    </div>
                </div>
                <div class="slider-item"> <img src="<?= ASSETS ?>/images/geprek.webp" alt="new fashion summer sale"
                        class="banner-img">
                    <div class="banner-content">
                        <p class="banner-subtitle">Sale Offer</p>
                        <h2 class="banner-title">New fashion summer sale</h2>
                        <p class="banner-text"> starting at &dollar; <b>29</b>.99 </p> <a href="#"
                            class="banner-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                    <div class="showcase-banner">
                                        <img src="<?= ASSETS ?>/images/products/geprek.png" alt="<?= $product['name'] ?>"
                                            width="300" class="product-img default <?php if ($product['stock'] == 0)
                                                echo 'image-habis' ?>">
                                            <img src="<?= ASSETS ?>/images/products/geprek.png" alt="<?= $product['name'] ?>"
                                            width="300" class="product-img hover <?php if ($product['stock'] == 0)
                                                echo 'image-habis' ?>">
                                        <?php if ($product['stock'] == 0) { ?>
                                            <p class="showcase-badge angle black">habis</p>
                                        <?php } ?>
                                        <div class="showcase-actions">
                                            <button class="btn-action">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </button>
                                            <?php if ($product['stock'] > 0) { ?>
                                                <?php if (isset($_SESSION['id'])) { ?>
                                                    <button onclick="addToCart(<?= $product['id'] ?>)" class="btn-action">
                                                        <ion-icon name="bag-handle-outline"></ion-icon>
                                                    </button>
                                                <?php } else { ?>
                                                    <a href="<?= BASE_URL ?>/login" class="btn-action">
                                                        <ion-icon name="bag-handle-outline"></ion-icon>
                                                    </a>
                                                <?php } ?>
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
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!--- BLOG -->
        <div class="blog">
            <div class="container">
                <div class="blog-container has-scrollbar">
                    <div class="blog-card"> <a href="#"> <img src="<?= ASSETS ?>/images/blog-1.jpg"
                                alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300"
                                class="blog-banner">
                        </a>
                        <div class="blog-content"> <a href="#" class="blog-category">Fashion</a> <a href="#">
                                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
                            </a>
                            <p class="blog-meta"> By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06,
                                    2022</time> </p>
                        </div>
                    </div>
                    <div class="blog-card"> <a href="#"> <img src="<?= ASSETS ?>/images/blog-2.jpg"
                                alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner"
                                width="300"> </a>
                        <div class="blog-content"> <a href="#" class="blog-category">Clothes</a>
                            <h3> <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup
                                    Battle.</a> </h3>
                            <p class="blog-meta"> By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18,
                                    2022</time> </p>
                        </div>
                    </div>
                    <div class="blog-card"> <a href="#"> <img src="<?= ASSETS ?>/images/blog-3.jpg"
                                alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner"
                                width="300">
                        </a>
                        <div class="blog-content"> <a href="#" class="blog-category">Shoes</a>
                            <h3> <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online
                                    Revenue.</a> </h3>
                            <p class="blog-meta"> By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10,
                                    2022</time> </p>
                        </div>
                    </div>
                    <div class="blog-card"> <a href="#"> <img src="<?= ASSETS ?>/images/blog-4.jpg"
                                alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner"
                                width="300"> </a>
                        <div class="blog-content"> <a href="#" class="blog-category">Electronics</a>
                            <h3> <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup
                                    Battle.</a> </h3>
                            <p class="blog-meta"> By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15,
                                    2022</time> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php if (isset($_SESSION['id'])) { ?>
    <script type="text/javascript">
        function addToCart(id) {
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
    </script>
<?php } ?>