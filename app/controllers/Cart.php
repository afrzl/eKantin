<?php

// use TransactionDetailModel;

class Cart extends Controller
{
    public function index()
    {
        $data['title'] = 'Cart';
        $data['products'] = $this->model('CartModel')->getCartProducts($_SESSION['id']);
        foreach ($data['products'] as $key => $product) {
            $data['products'][$key]['canteen'] = $this->model('UserModel')->getUserById($product['product_canteen_id']);
        }

        $this->load('header');
        $this->view('cart/index', $data);
        $this->load('footer');
    }

    public function store()
    {
        $cart = $this->model('CartModel')->getCartByUserIdProductId($_POST['user_id'], $_POST['product_id']);
        $product = $this->model('ProductModel')->getProductById($_POST['product_id']);
        $_POST['qty'] += $cart ? $cart['qty'] : 0;

        if ($product['stock'] < $_POST['qty']) {
            $res = new stdclass();
            $res->code = 300;
            $res->msg = 'Out of stock';
            echo json_encode($res);
            return;
        }

        if ($cart) {
            $this->model("CartModel")->update($cart['id'], $_POST);
        } else {
            $this->model("CartModel")->insert($_POST);
        }

        $res = new stdclass();
        $res->code = 200;
        $res->msg = $this->model('CartModel')->countCartByUserId($_SESSION['id']);
        echo json_encode($res);
        return;
    }

    public function update()
    {
        $cart = $this->model('CartModel')->getCartByUserIdProductId($_POST['user_id'], $_POST['product_id']);
        $product = $this->model('ProductModel')->getProductById($_POST['product_id']);

        $res = new stdclass();

        if ($cart) {
            if ($product['stock'] < $_POST['qty']) {
                $res->code = 300;
                $res->msg = 'Out of stock';

                echo json_encode($res);
                return;
            }

            $this->model("CartModel")->update($cart['id'], $_POST);
            $res->code = 200;
            $res->msg = $this->model('CartModel')->countCartByUserId($_SESSION['id']);
            echo json_encode($res);
            return;
        }

        $res->code = 300;
        $res->msg = 'ID not found';
        echo json_encode($res);
        return;
    }

    public function countCart()
    {
        echo $this->model('CartModel')->countCartByUserId($_SESSION['id']);
    }

    public function total()
    {
        $cart = $this->model('CartModel')->getCartProducts($_SESSION['id']);
        $res = new stdclass();
        $res->total_item = 0;
        $res->total_harga = 0;
        foreach ($cart as $product) {
            $res->total_item += $product['qty'];
            $res->total_harga += $product['product_price'] * $product['qty'];
        }
        $res->total_harga = number_format($res->total_harga, 0, '', '.');

        echo json_encode($res);
    }

    public function delete()
    {
        $cart = $this->model('CartModel')->delete($_POST['id']);

        echo $cart;
    }

    public function payment()
    {
        $cart = $this->model('CartModel')->getCartProducts($_SESSION['id']);

        $res = new stdClass();

        $total_price = 0;
        foreach ($cart as $product) {
            $total_price += $product['product_price'] * $product['qty'];
            $dataProduct = $this->model('ProductModel')->getProductById($product['product_id']);
            if ($dataProduct['stock'] < $product['qty']) {
                $res->code = 300;
                $res->msg = 'Stok produk ' . $dataProduct['name'] . ' hanya sisa ' . $dataProduct['stock'];
                echo json_encode($res);
                return;
            }

        }

        $data = $this->model('TransactionModel');
        $data->user_id = $_SESSION['id'];
        $data->total_price = $total_price;
        $data->status = 'PENDING';
        $data->created_at = date('Y-m-d H:i:s');

        $id_transaction = $data->insert();

        foreach ($cart as $product) {
            $dataProduct = $this->model('ProductModel')->updateStock($product['product_id'], $product['qty']);

            $data = $this->model('TransactionDetailModel');
            $data->transaction_id = $id_transaction;
            $data->product_id = $product['product_id'];
            $data->qty = $product['qty'];
            $data->price = $product['product_price'];

            $data->insert();

            $this->model('CartModel')->delete($product['id']);
        }

        $res->code = 200;
        $res->msg = 'ok';
        echo json_encode($res);
    }
}