<?php

use Midtrans\Config as Config;

// use TransactionDetailModel;

class Cart extends Controller
{
    public function index()
    {
        $data['title'] = 'Cart';
        $products = $this->model('CartModel')->getCartProducts($_SESSION['id']);

        $canteen_group = array();
        foreach ($products as $data) {
            if (isset($canteen_group[$data['product_canteen_id']]))
                array_push($canteen_group[$data['product_canteen_id']], $data);
            else
                $canteen_group[$data['product_canteen_id']] = array($data);
        }
        $data['canteen_group'] = array_values($canteen_group);

        foreach ($data['canteen_group'] as $key => $cart) {
            $data['canteen_group'][$key][0]['canteen'] = $this->model('UserModel')->getUserById($cart[0]['product_canteen_id']);
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

        $canteen_group = array();
        foreach ($cart as $data) {
            if (isset($canteen_group[$data['product_canteen_id']]))
                array_push($canteen_group[$data['product_canteen_id']], $data);
            else
                $canteen_group[$data['product_canteen_id']] = array($data);
        }
        $canteens = array_values($canteen_group);

        foreach ($canteens as $key => $canteen) {
            $total_item[$key] = array_column($canteen, 'qty');

            $total_harga[$key] = array_column($canteen, 'product_price');
            foreach ($total_harga[$key] as $i => $v) {
                $total_harga[$key][$i] *= $total_item[$key][$i];
            }

            $res->total_item[$key] = array_sum($total_item[$key]);
            $res->total_harga[$key] = number_format(array_sum($total_harga[$key]), 0, '', '.');
        }

        echo json_encode($res);
    }

    public function delete()
    {
        $cart = $this->model('CartModel')->delete($_POST['id']);

        echo $cart;
    }

    public function payment()
    {
        $cart = $this->model('CartModel')->getCartProductsByCanteenId($_SESSION['id'], $_POST['canteen_id']);
        $user = $this->model('UserModel')->getUserById($_SESSION['id']);

        $total_item = array_column($cart, 'qty');

        $total_harga = array_column($cart, 'product_price');
        foreach ($total_harga as $i => $v) {
            $total_harga[$i] *= $total_item[$i];
        }

        // Set your Merchant Server Key
        Config::$serverKey = 'SB-Mid-server-3h0ow7ZfGr3V7qZNGKRZOZRF';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;
        $midtrans_id = rand();
        $params = array(
            'transaction_details' => array(
                'order_id' => $midtrans_id,
                'gross_amount' => array_sum($total_harga),
            ),
            // 'item_details' => json_decode($_POST['item'], true),
            'customer_details' => array(
                'first_name' => $user['name'],
                'email' => $user['email'],
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $data = $this->model('TransactionModel');
        $data->user_id = $_SESSION['id'];
        $data->total_price = array_sum($total_harga);
        $data->canteen_id = $cart[0]['product_canteen_id'];
        $data->status = 'PENDING';
        $data->created_at = date('Y-m-d H:i:s');
        $data->pin = random_int(100000, 999999);
        $data->midtrans_id = $midtrans_id;

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

        $res = new stdClass();

        $res->code = 200;
        $res->msg = $snapToken;
        $res->id_transaction = $id_transaction;
        echo json_encode($res);
    }

    public function callback_pay()
    {
        $this->model('TransactionModel')->updateSuccess($_POST['id']);
        $res = new stdClass();
        $res->code = 200;
        $res->msg = 'ok';
        echo json_encode($res);
    }
}