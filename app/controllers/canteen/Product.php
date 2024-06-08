<?php

class Product extends Controller
{
    public function index()
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'products';
        $data['title'] = 'Daftar Produk';
        $data['products'] = $this->model('ProductModel')->getProductsByCanteen($_SESSION['id']);
        $this->views('canteen/product/index', $data);
    }

    public function create()
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'products';
        $data['title'] = 'Tambah Produk';
        $data['subpage'] = 'create';
        $data['categories'] = $this->model('CategoryModel')->getAllCategories();
        $this->views('canteen/product/create', $data);
    }

    public function store()
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }

        $product = $this->model('ProductModel');
        $product->name = $_POST['name'];
        $product->slug = $_POST['slug'];
        $product->description = $_POST['description'];
        $product->price = $_POST['price'];
        $product->stock = $_POST['stock'];
        $product->discount = 0;
        $product->category_id = $_POST['category_id'];
        $product->canteen_id = $_SESSION['id'];

        $file_type = array('png', 'jpg', 'jpeg');
        $nama = $_FILES["image"]["name"];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $file_name = time() . '.' . $ekstensi;
        $ukuran = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        if (in_array($ekstensi, $file_type) === true) {
            if ($ukuran < 2048000) {
                move_uploaded_file($file_tmp, 'public/images/products/' . $file_name);
                $product->image = $file_name;
            } else {
                $_SESSION['flash'] = 'Ukuran file terlalu besar';
                header("Location: " . BASE_URL . "/c/product");
                return;
            }
        } else {
            $_SESSION['flash'] = 'Ekstensi file salah';
            header("Location: " . BASE_URL . "/c/product");
            return;
        }

        $product->insert();

        $_SESSION['flash'] = 'Sukses menambahkan data';
        header("Location: " . BASE_URL . "/c/product");
    }

    public function edit($id)
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'products';
        $data['title'] = 'Edit Produk';
        $data['subpage'] = 'edit';
        $data['product'] = $this->model('ProductModel')->getProductById($id);
        if (!$data['product']) {
            echo '404 - not found';
            return;
        }
        if ($data['product']['canteen_id'] != $_SESSION['id']) {
            echo '404 - not found';
            return;
        }
        $data['categories'] = $this->model('CategoryModel')->getAllCategories();
        $this->views('canteen/product/create', $data);
    }

    public function update($id)
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }

        $product = $this->model('ProductModel')->getProductById($id);
        if (!empty($product)) {
            $product = $this->model('ProductModel');
        }
        $product->id = $id;
        $product->name = $_POST['name'];
        $product->slug = $_POST['slug'];
        $product->description = $_POST['description'];
        $product->price = $_POST['price'];
        $product->stock = $_POST['stock'];
        $product->discount = 0;
        $product->category_id = $_POST['category_id'];
        $product->canteen_id = $_SESSION['id'];

        if ($_FILES['image']['name'] != "") {
            $file_type = array('png', 'jpg', 'jpeg');
            $nama = $_FILES["image"]["name"];
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $file_name = time() . '.' . $ekstensi;
            $ukuran = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];

            if (in_array($ekstensi, $file_type) === true) {
                if ($ukuran < 2048000) {
                    move_uploaded_file($file_tmp, 'public/images/products/' . $file_name);
                    $product->image = $file_name;
                } else {
                    $_SESSION['flash'] = 'Ukuran file terlalu besar';
                    header("Location: " . BASE_URL . "/c/product");
                    return;
                }
            } else {
                $_SESSION['flash'] = 'Ekstensi file salah';
                header("Location: " . BASE_URL . "/c/product");
                return;
            }
        }

        $product->update();

        $_SESSION['flash'] = 'Sukses mengubah data';
        header("Location: " . BASE_URL . "/c/product");
    }

    public function destroy()
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }

        $this->model('ProductModel')->delete($_POST['id']);

        $res = new stdclass();
        $res->code = 200;
        $res->msg = 'Produk berhasil dihapus';
        $_SESSION['flash'] = $res->msg;
        echo json_encode($res);
        return;
    }
}