<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eKantin</title>
    <link rel="shortcut icon" href="<?= ASSETS ?>/images2/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/style-prefix.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="overlay" data-overlay></div>
    <div class="notification-toast" data-toast> <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>
        <div class="toast-banner"> <img src="<?= ASSETS ?>/images2/products/jewellery-1.jpg" alt="Rose Gold Earrings"
                width="80" height="70"> </div>
        <div class="toast-detail">
            <p class="toast-message"> Someone in new just bought </p>
            <p class="toast-title"> Rose Gold Earrings </p>
            <p class="toast-meta"> <time datetime="PT2M">2 Minutes</time> ago </p>
        </div>
    </div>
    <header>
        <div class="header-main">
            <div class="container"> <a href="#" class="header-logo">
                    <h2>eKantin</h2>
                </a>
                <div class="header-search-container"> <input type="search" name="search" class="search-field"
                        placeholder="Cari makanan..."> <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button> </div>
                <div class="header-user-actions"> <button class="action-btn">
                        <ion-icon style="width: 20px" name="person-outline"></ion-icon>
                    </button> <button class="action-btn">
                        <ion-icon style="width: 20px" name="heart-outline"></ion-icon> <span class="count">0</span>
                    </button> <button class="action-btn">
                        <ion-icon style="width: 20px" name="bag-handle-outline"></ion-icon> <span class="count">0</span>
                    </button> </div>
            </div>
        </div>
        <nav class="desktop-navigation-menu">
            <div class="container">
                <ul class="desktop-menu-category-list">
                    <li class="menu-category"> <a href="#" class="menu-title">Home</a> </li>
                    <li class="menu-category"> <a href="#" class="menu-title">Kantin 1</a>
                        <div class="dropdown-panel">
                            <ul class="dropdown-panel-list">
                                <li class="menu-title"> <a href="#">Electronics</a> </li>
                                <li class="panel-list-item"> <a href="#">Desktop</a> </li>
                                <li class="panel-list-item"> <a href="#">Laptop</a> </li>
                                <li class="panel-list-item"> <a href="#">Camera</a> </li>
                                <li class="panel-list-item"> <a href="#">Tablet</a> </li>
                                <li class="panel-list-item"> <a href="#">Headphone</a> </li>
                                <li class="panel-list-item"> <a href="#"> <img
                                            src="<?= ASSETS ?>/images2/electronics-banner-1.jpg"
                                            alt="headphone collection" width="250" height="119"> </a> </li>
                            </ul>
                            <ul class="dropdown-panel-list">
                                <li class="menu-title"> <a href="#">Men's</a> </li>
                                <li class="panel-list-item"> <a href="#">Formal</a> </li>
                                <li class="panel-list-item"> <a href="#">Casual</a> </li>
                                <li class="panel-list-item"> <a href="#">Sports</a> </li>
                                <li class="panel-list-item"> <a href="#">Jacket</a> </li>
                                <li class="panel-list-item"> <a href="#">Sunglasses</a> </li>
                                <li class="panel-list-item"> <a href="#"> <img
                                            src="<?= ASSETS ?>/images2/mens-banner.jpg" alt="men's fashion" width="250"
                                            height="119"> </a> </li>
                            </ul>
                            <ul class="dropdown-panel-list">
                                <li class="menu-title"> <a href="#">Women's</a> </li>
                                <li class="panel-list-item"> <a href="#">Formal</a> </li>
                                <li class="panel-list-item"> <a href="#">Casual</a> </li>
                                <li class="panel-list-item"> <a href="#">Perfume</a> </li>
                                <li class="panel-list-item"> <a href="#">Cosmetics</a> </li>
                                <li class="panel-list-item"> <a href="#">Bags</a> </li>
                                <li class="panel-list-item"> <a href="#"> <img
                                            src="<?= ASSETS ?>/images2/womens-banner.jpg" alt="women's fashion"
                                            width="250" height="119"> </a> </li>
                            </ul>
                            <ul class="dropdown-panel-list">
                                <li class="menu-title"> <a href="#">Electronics</a> </li>
                                <li class="panel-list-item"> <a href="#">Smart Watch</a> </li>
                                <li class="panel-list-item"> <a href="#">Smart TV</a> </li>
                                <li class="panel-list-item"> <a href="#">Keyboard</a> </li>
                                <li class="panel-list-item"> <a href="#">Mouse</a> </li>
                                <li class="panel-list-item"> <a href="#">Microphone</a> </li>
                                <li class="panel-list-item"> <a href="#"> <img
                                            src="<?= ASSETS ?>/images2/electronics-banner-2.jpg" alt="mouse collection"
                                            width="250" height="119"> </a> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-category"> <a href="#" class="menu-title">Men's</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item"> <a href="#">Shirt</a> </li>
                            <li class="dropdown-item"> <a href="#">Shorts & Jeans</a> </li>
                            <li class="dropdown-item"> <a href="#">Safety Shoes</a> </li>
                            <li class="dropdown-item"> <a href="#">Wallet</a> </li>
                        </ul>
                    </li>
                    <li class="menu-category"> <a href="#" class="menu-title">Women's</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item"> <a href="#">Dress & Frock</a> </li>
                            <li class="dropdown-item"> <a href="#">Earrings</a> </li>
                            <li class="dropdown-item"> <a href="#">Necklace</a> </li>
                            <li class="dropdown-item"> <a href="#">Makeup Kit</a> </li>
                        </ul>
                    </li>
                    <li class="menu-category"> <a href="#" class="menu-title">Jewelry</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item"> <a href="#">Earrings</a> </li>
                            <li class="dropdown-item"> <a href="#">Couple Rings</a> </li>
                            <li class="dropdown-item"> <a href="#">Necklace</a> </li>
                            <li class="dropdown-item"> <a href="#">Bracelets</a> </li>
                        </ul>
                    </li>
                    <li class="menu-category"> <a href="#" class="menu-title">Perfume</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item"> <a href="#">Clothes Perfume</a> </li>
                            <li class="dropdown-item"> <a href="#">Deodorant</a> </li>
                            <li class="dropdown-item"> <a href="#">Flower Fragrance</a> </li>
                            <li class="dropdown-item"> <a href="#">Air Freshener</a> </li>
                        </ul>
                    </li>
                    <li class="menu-category"> <a href="#" class="menu-title">Blog</a> </li>
                    <li class="menu-category"> <a href="#" class="menu-title">Hot Offers</a> </li>
                </ul>
            </div>
        </nav>
        <div class="mobile-bottom-navigation"> <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button> <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon> <span class="count">0</span>
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
                <li class="menu-category"> <a href="#" class="menu-title">Home</a> </li>
                <li class="menu-category"> <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Men's</p>
                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>
                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Shirt</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Shorts & Jeans</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Safety Shoes</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Wallet</a> </li>
                    </ul>
                </li>
                <li class="menu-category"> <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Women's</p>
                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>
                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Dress & Frock</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Earrings</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Necklace</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Makeup Kit</a> </li>
                    </ul>
                </li>
                <li class="menu-category"> <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Jewelry</p>
                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>
                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Earrings</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Couple Rings</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Necklace</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Bracelets</a> </li>
                    </ul>
                </li>
                <li class="menu-category"> <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Perfume</p>
                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>
                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Clothes Perfume</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Deodorant</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Flower Fragrance</a> </li>
                        <li class="submenu-category"> <a href="#" class="submenu-title">Air Freshener</a> </li>
                    </ul>
                </li>
                <li class="menu-category"> <a href="#" class="menu-title">Blog</a> </li>
                <li class="menu-category"> <a href="#" class="menu-title">Hot Offers</a> </li>
            </ul>
            <div class="menu-bottom">
                <ul class="menu-category-list">
                    <li class="menu-category"> <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>
                        <ul class="submenu-category-list" data-accordion>
                            <li class="submenu-category"> <a href="#" class="submenu-title">English</a> </li>
                            <li class="submenu-category"> <a href="#" class="submenu-title">Espa&ntilde;ol</a> </li>
                            <li class="submenu-category"> <a href="#" class="submenu-title">Fren&ccedil;h</a> </li>
                        </ul>
                    </li>
                    <li class="menu-category"> <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>
                        <ul class="submenu-category-list" data-accordion>
                            <li class="submenu-category"> <a href="#" class="submenu-title">USD &dollar;</a> </li>
                            <li class="submenu-category"> <a href="#" class="submenu-title">EUR &euro;</a> </li>
                        </ul>
                    </li>
                </ul>
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
    </header> <!--    - MAIN  -->
    <main>
        <!--      - BANNER    -->
        <div class="banner">
            <div class="container">
                <div class="slider-container has-scrollbar">
                    <div class="slider-item"> <img src="<?= ASSETS ?>/images2/gudeg.jpg"
                            alt="women's latest fashion sale" class="banner-img">
                        <div class="banner-content">
                            <p class="banner-subtitle">Makanan Trending</p>
                            <h2 class="banner-title">Gudeg Jogja Yu Jum</h2>
                            <p class="banner-text"> Dimulai dari &dollar; Rp<b>20</b>.000 </p> <a href="#"
                                class="banner-btn">Beli Sekarang</a>
                        </div>
                    </div>
                    <div class="slider-item"> <img src="<?= ASSETS ?>/images2/soto.jpg" alt="modern sunglasses"
                            class="banner-img">
                        <div class="banner-content">
                            <p class="banner-subtitle">Trending accessories</p>
                            <h2 class="banner-title">Modern sunglasses</h2>
                            <p class="banner-text"> starting at &dollar; <b>15</b>.00 </p> <a href="#"
                                class="banner-btn">Shop now</a>
                        </div>
                    </div>
                    <div class="slider-item"> <img src="<?= ASSETS ?>/images2/geprek.webp" alt="new fashion summer sale"
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
                <!--- SIDEBAR -->
                <div class="sidebar  has-scrollbar" data-mobile-menu>
                    <div class="sidebar-category">
                        <div class="sidebar-top">
                            <h2 class="sidebar-title">Daftar Kantin</h2> <button class="sidebar-close-btn"
                                data-mobile-menu-close-btn>
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
                        </div>
                        <ul class="sidebar-menu-category-list">
                            <li class="sidebar-menu-category"> <button class="sidebar-accordion-menu"
                                    data-accordion-btn>
                                    <div class="menu-title-flex"> <img src="<?= ASSETS ?>/images2/icons/dress.svg"
                                            alt="clothes" width="20" height="20" class="menu-title-img">
                                        <p class="menu-title">Kantin Bang Adi</p>
                                    </div>
                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>
                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shirt</p> <data value="300" class="stock"
                                                title="Available Stock">300</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">shorts & jeans</p> <data value="60" class="stock"
                                                title="Available Stock">60</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">jacket</p> <data value="50" class="stock"
                                                title="Available Stock">50</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">dress & frock</p> <data value="87" class="stock"
                                                title="Available Stock">87</data>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-category"> <button class="sidebar-accordion-menu"
                                    data-accordion-btn>
                                    <div class="menu-title-flex"> <img src="<?= ASSETS ?>/images2/icons/shoes.svg"
                                            alt="footwear" class="menu-title-img" width="20" height="20">
                                        <p class="menu-title">Kantin Bu Ida</p>
                                    </div>
                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>
                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Sports</p> <data value="45" class="stock"
                                                title="Available Stock">45</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Formal</p> <data value="75" class="stock"
                                                title="Available Stock">75</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Casual</p> <data value="35" class="stock"
                                                title="Available Stock">35</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Safety Shoes</p> <data value="26" class="stock"
                                                title="Available Stock">26</data>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-category"> <button class="sidebar-accordion-menu"
                                    data-accordion-btn>
                                    <div class="menu-title-flex"> <img src="<?= ASSETS ?>/images2/icons/jewelry.svg"
                                            alt="clothes" class="menu-title-img" width="20" height="20">
                                        <p class="menu-title">Jewelry</p>
                                    </div>
                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>
                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Earrings</p> <data value="46" class="stock"
                                                title="Available Stock">46</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Couple Rings</p> <data value="73" class="stock"
                                                title="Available Stock">73</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Necklace</p> <data value="61" class="stock"
                                                title="Available Stock">61</data>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-category"> <button class="sidebar-accordion-menu"
                                    data-accordion-btn>
                                    <div class="menu-title-flex"> <img src="<?= ASSETS ?>/images2/icons/perfume.svg"
                                            alt="perfume" class="menu-title-img" width="20" height="20">
                                        <p class="menu-title">Perfume</p>
                                    </div>
                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>
                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Clothes Perfume</p> <data value="12" class="stock"
                                                title="Available Stock">12 pcs</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Deodorant</p> <data value="60" class="stock"
                                                title="Available Stock">60 pcs</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">jacket</p> <data value="50" class="stock"
                                                title="Available Stock">50 pcs</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">dress & frock</p> <data value="87" class="stock"
                                                title="Available Stock">87 pcs</data>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-category"> <button class="sidebar-accordion-menu"
                                    data-accordion-btn>
                                    <div class="menu-title-flex"> <img src="<?= ASSETS ?>/images2/icons/cosmetics.svg"
                                            alt="cosmetics" class="menu-title-img" width="20" height="20">
                                        <p class="menu-title">Cosmetics</p>
                                    </div>
                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>
                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shampoo</p> <data value="68" class="stock"
                                                title="Available Stock">68</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Sunscreen</p> <data value="46" class="stock"
                                                title="Available Stock">46</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Body Wash</p> <data value="79" class="stock"
                                                title="Available Stock">79</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Makeup Kit</p> <data value="23" class="stock"
                                                title="Available Stock">23</data>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-category"> <button class="sidebar-accordion-menu"
                                    data-accordion-btn>
                                    <div class="menu-title-flex"> <img src="<?= ASSETS ?>/images2/icons/glasses.svg"
                                            alt="glasses" class="menu-title-img" width="20" height="20">
                                        <p class="menu-title">Glasses</p>
                                    </div>
                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>
                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Sunglasses</p> <data value="50" class="stock"
                                                title="Available Stock">50</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Lenses</p> <data value="48" class="stock"
                                                title="Available Stock">48</data>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-category"> <button class="sidebar-accordion-menu"
                                    data-accordion-btn>
                                    <div class="menu-title-flex"> <img src="<?= ASSETS ?>/images2/icons/bag.svg"
                                            alt="bags" class="menu-title-img" width="20" height="20">
                                        <p class="menu-title">Bags</p>
                                    </div>
                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>
                                <ul class="sidebar-submenu-category-list" data-accordion>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shopping Bag</p> <data value="62" class="stock"
                                                title="Available Stock">62</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Gym Backpack</p> <data value="35" class="stock"
                                                title="Available Stock">35</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Purse</p> <data value="80" class="stock"
                                                title="Available Stock">80</data>
                                        </a> </li>
                                    <li class="sidebar-submenu-category"> <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Wallet</p> <data value="75" class="stock"
                                                title="Available Stock">75</data>
                                        </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="product-showcase">
                        <h3 class="showcase-heading">Diskon Paling Besar</h3>
                        <div class="showcase-wrapper">
                            <div class="showcase-container">
                                <div class="showcase"> <a href="#" class="showcase-img-box"> <img
                                            src="<?= ASSETS ?>/images2/gudeg.jpg" alt="baby fabric shoes" width="75"
                                            height="75" class="showcase-img"> </a>
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
                                            src="<?= ASSETS ?>/images2/products/2.jpg" alt="men's hoodies t-shirt"
                                            class="showcase-img" width="75" height="75"> </a>
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
                                            src="<?= ASSETS ?>/images2/products/3.jpg" alt="girls t-shirt"
                                            class="showcase-img" width="75" height="75"> </a>
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
                                            src="<?= ASSETS ?>/images2/products/4.jpg" alt="woolen hat for men"
                                            class="showcase-img" width="75" height="75"> </a>
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
                <div class="product-box">
                    <!--- PRODUCT FEATURED -->
                    <div class="product-main">
                        <h2 class="title">Produk eKantin STIS</h2>
                        <div class="product-grid">
                            <div class="showcase">
                                <a href="<?= BASE_URL ?>/product">
                                    <div class="showcase-banner">
                                        <img src="<?= ASSETS ?>/images2/products/jacket-3.jpg"
                                            alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                                        <img src="<?= ASSETS ?>/images2/products/jacket-4.jpg"
                                            alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                                        <p class="showcase-badge">15%</p>
                                        <div class="showcase-actions"> <button class="btn-action">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </button> <button class="btn-action">
                                                <ion-icon name="eye-outline"></ion-icon>
                                            </button> <button class="btn-action">
                                                <ion-icon name="repeat-outline"></ion-icon>
                                            </button> <button class="btn-action">
                                                <ion-icon name="bag-add-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="showcase-content">
                                        <a href="#" class="showcase-category">jacket</a>
                                        <a href="<?= BASE_URL ?>/product">
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
                                </a>
                            </div>
                            <div class="showcase">
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/shirt-1.jpg"
                                        alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                                    <img src="<?= ASSETS ?>/images2/products/shirt-2.jpg"
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/jacket-5.jpg"
                                        alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                                    <img src="<?= ASSETS ?>/images2/products/jacket-6.jpg"
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
                                    <h3> <a href="#" class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</a> </h3>
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/clothes-3.jpg"
                                        alt="Black Floral Wrap Midi Skirt" class="product-img default" width="300"> <img
                                        src="<?= ASSETS ?>/images2/products/clothes-4.jpg"
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/shoe-2.jpg"
                                        alt="Casual Men's Brown shoes" class="product-img default" width="300"> <img
                                        src="<?= ASSETS ?>/images2/products/shoe-2_1.jpg" alt="Casual Men's Brown shoes"
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/watch-3.jpg"
                                        alt="Pocket Watch Leather Pouch" class="product-img default" width="300"> <img
                                        src="<?= ASSETS ?>/images2/products/watch-4.jpg"
                                        alt="Pocket Watch Leather Pouch" class="product-img hover" width="300">
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/watch-1.jpg"
                                        alt="Smart watche Vital Plus" class="product-img default" width="300"> <img
                                        src="<?= ASSETS ?>/images2/products/watch-2.jpg" alt="Smart watche Vital Plus"
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/party-wear-1.jpg"
                                        alt="Womens Party Wear Shoes" class="product-img default" width="300"> <img
                                        src="<?= ASSETS ?>/images2/products/party-wear-2.jpg"
                                        alt="Womens Party Wear Shoes" class="product-img hover" width="300">
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/jacket-1.jpg"
                                        alt="Mens Winter Leathers Jackets" class="product-img default" width="300"> <img
                                        src="<?= ASSETS ?>/images2/products/jacket-2.jpg"
                                        alt="Mens Winter Leathers Jackets" class="product-img hover" width="300">
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/sports-2.jpg"
                                        alt="Trekking & Running Shoes - black" class="product-img default" width="300">
                                    <img src="<?= ASSETS ?>/images2/products/sports-4.jpg"
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
                                    <h3> <a href="#" class="showcase-title">Trekking & Running Shoes - black</a> </h3>
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/shoe-1.jpg"
                                        alt="Men's Leather Formal Wear shoes" class="product-img default" width="300">
                                    <img src="<?= ASSETS ?>/images2/products/shoe-1_1.jpg"
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
                                    <h3> <a href="#" class="showcase-title">Men's Leather Formal Wear shoes</a> </h3>
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
                                <div class="showcase-banner"> <img src="<?= ASSETS ?>/images2/products/shorts-1.jpg"
                                        alt="Better Basics French Terry Sweatshorts" class="product-img default"
                                        width="300"> <img src="<?= ASSETS ?>/images2/products/shorts-2.jpg"
                                        alt="Better Basics French Terry Sweatshorts" class="product-img hover"
                                        width="300">
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
                                    <h3> <a href="#" class="showcase-title">Better Basics French Terry Sweatshorts</a>
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

        <!--- BLOG -->
        <div class="blog">
            <div class="container">
                <div class="blog-container has-scrollbar">
                    <div class="blog-card"> <a href="#"> <img src="<?= ASSETS ?>/images2/blog-1.jpg"
                                alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300"
                                class="blog-banner"> </a>
                        <div class="blog-content"> <a href="#" class="blog-category">Fashion</a> <a href="#">
                                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
                            </a>
                            <p class="blog-meta"> By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06,
                                    2022</time> </p>
                        </div>
                    </div>
                    <div class="blog-card"> <a href="#"> <img src="<?= ASSETS ?>/images2/blog-2.jpg"
                                alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner"
                                width="300"> </a>
                        <div class="blog-content"> <a href="#" class="blog-category">Clothes</a>
                            <h3> <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup
                                    Battle.</a> </h3>
                            <p class="blog-meta"> By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18,
                                    2022</time> </p>
                        </div>
                    </div>
                    <div class="blog-card"> <a href="#"> <img src="<?= ASSETS ?>/images2/blog-3.jpg"
                                alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner"
                                width="300"> </a>
                        <div class="blog-content"> <a href="#" class="blog-category">Shoes</a>
                            <h3> <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online
                                    Revenue.</a> </h3>
                            <p class="blog-meta"> By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10,
                                    2022</time> </p>
                        </div>
                    </div>
                    <div class="blog-card"> <a href="#"> <img src="<?= ASSETS ?>/images2/blog-4.jpg"
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

    <!--- FOOTER -->
    <footer>
        <div class="footer-category">
            <div class="container">
                <h2 class="footer-category-title">Menu Kantin</h2>
                <div class="footer-category-box">
                    <h3 class="category-box-title">Kantin Bang Aming :</h3> <a href="#"
                        class="footer-category-link">T-shirt</a>
                    <a href="#" class="footer-category-link">Shirts</a> <a href="#" class="footer-category-link">shorts
                        & jeans</a> <a href="#" class="footer-category-link">jacket</a> <a href="#"
                        class="footer-category-link">dress & frock</a> <a href="#"
                        class="footer-category-link">innerwear</a> <a href="#" class="footer-category-link">hosiery</a>
                </div>
                <div class="footer-category-box">
                    <h3 class="category-box-title">footwear :</h3> <a href="#" class="footer-category-link">sport</a> <a
                        href="#" class="footer-category-link">formal</a> <a href="#"
                        class="footer-category-link">Boots</a> <a href="#" class="footer-category-link">casual</a> <a
                        href="#" class="footer-category-link">cowboy shoes</a> <a href="#"
                        class="footer-category-link">safety shoes</a> <a href="#" class="footer-category-link">Party
                        wear shoes</a> <a href="#" class="footer-category-link">Branded</a> <a href="#"
                        class="footer-category-link">Firstcopy</a> <a href="#" class="footer-category-link">Long
                        shoes</a>
                </div>
                <div class="footer-category-box">
                    <h3 class="category-box-title">jewellery :</h3> <a href="#"
                        class="footer-category-link">Necklace</a> <a href="#" class="footer-category-link">Earrings</a>
                    <a href="#" class="footer-category-link">Couple rings</a> <a href="#"
                        class="footer-category-link">Pendants</a> <a href="#" class="footer-category-link">Crystal</a>
                    <a href="#" class="footer-category-link">Bangles</a> <a href="#"
                        class="footer-category-link">bracelets</a> <a href="#" class="footer-category-link">nosepin</a>
                    <a href="#" class="footer-category-link">chain</a> <a href="#"
                        class="footer-category-link">Earrings</a> <a href="#" class="footer-category-link">Couple
                        rings</a>
                </div>
                <div class="footer-category-box">
                    <h3 class="category-box-title">cosmetics :</h3> <a href="#" class="footer-category-link">Shampoo</a>
                    <a href="#" class="footer-category-link">Bodywash</a> <a href="#"
                        class="footer-category-link">Facewash</a> <a href="#" class="footer-category-link">makeup
                        kit</a> <a href="#" class="footer-category-link">liner</a> <a href="#"
                        class="footer-category-link">lipstick</a> <a href="#" class="footer-category-link">prefume</a>
                    <a href="#" class="footer-category-link">Body soap</a> <a href="#"
                        class="footer-category-link">scrub</a> <a href="#" class="footer-category-link">hair gel</a> <a
                        href="#" class="footer-category-link">hair colors</a> <a href="#"
                        class="footer-category-link">hair dye</a> <a href="#" class="footer-category-link">sunscreen</a>
                    <a href="#" class="footer-category-link">skin loson</a> <a href="#"
                        class="footer-category-link">liner</a> <a href="#" class="footer-category-link">lipstick</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container"> <img src="<?= ASSETS ?>/images2/payment.png" alt="payment method"
                    class="payment-img">
                <p class="copyright"> Copyright &copy; <a href="#">eKantin STIS</a> All Rights Reserved. </p>
            </div>
        </div>
    </footer>

    <!--    - custom js link  -->
    <script src="<?= ASSETS ?>/js/script2.js"></script> <!--    - ionicon link  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>