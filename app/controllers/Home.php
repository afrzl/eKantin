<?php
class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Landing Page';
        $data['page'] = 'home';
        $data['subtitle'] = 'Produk eKantin STIS';
        $data['canteen_id'] = '';
        $data['category_id'] = '';

        // $data['user'] = $this->model('UserModel')->getUserByUsername('afrizal');
        $data['products'] = $this->model('ProductModel')->getAllProducts();
        $data['canteens'] = $this->model('UserModel')->getAllCanteens();

        $this->load('header');
        $this->load('navigation');
        $this->view('home/index', $data);
        $this->load('footer');
    }

    public function searchProducts()
    {
        $products = $this->model('ProductModel')->getProductByKeyword($_POST['q'], $_POST['canteen_id'], $_POST['category_id']);

        $res = "";

        if (!$products) {
            $res .= "<p><em>Tidak ada produk...</em></p>";
            echo $res;
            return;
        }

        foreach ($products as $product) {
            $res .= '<div class="showcase"><a href="' . BASE_URL . '/product/' . $product['slug'] . '"><div class="showcase-banner"><img src="' . ASSETS . '/images/products/' . $product['image'] . '"';
            $res .= 'alt="' . $product['name'] . '" style="width: 100%" class="product-img default ' . ($product['stock'] == 0 ? 'image-habis' : '') . '"><img src="' . ASSETS . '/images/products/' . $product['image'] . '" alt="' . $product['name'] . '" style="width: 100%" class="product-img hover ' . ($product['stock'] == 0 ? 'image-habis' : '') . '">';
            if ($product['stock'] == 0) {
                $res .= '<p class="showcase-badge angle black">habis</p>';
            }

            $res .= '</a></div><div class="showcase-content"><a href="' . BASE_URL . '/category/' . $product['category_slug'] . '" class="showcase-category">' . $product['category_name'] . '</a><a href="' . BASE_URL . '/product/' . $product['slug'] . '"><h3 class="showcase-title">' . $product['name'] . '</h3></a><div class="price-box"><p class="price">Rp' . number_format($product['price'], 0, '', '.') . '</p></div></div></div>';
        }
        echo $res;
    }
}