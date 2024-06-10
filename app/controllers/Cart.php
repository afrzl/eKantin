<?php

use Midtrans\Config as Config;

// use TransactionDetailModel;

class Cart extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['id'])) {
            header("Location: " . BASE_URL . "/login");
        }

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

    public function checkout($canteen_id)
    {
        $data['title'] = 'Cart';
        $data['products'] = $this->model('CartModel')->getCartProductsByCanteenId($_SESSION['id'], $canteen_id);

        foreach ($data['products'] as $key => $cart) {
            $data['product'][$key]['canteen'] = $this->model('UserModel')->getUserById($cart['product_canteen_id']);
        }

        $this->load('header');
        $this->view('cart/checkout', $data);
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

            $res->canteen_id[$key] = $canteen[0]['product_canteen_id'];
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
        $data->jenis_pemesanan = $_POST['jenis_pemesanan'];
        if ($_POST['jenis_pemesanan'] == 1) {
            $data->no_meja = $_POST['no_meja'];
        }
        $data->created_at = date('Y-m-d H:i:s');
        $data->pin = random_int(100000, 999999);
        $data->midtrans_id = $snapToken;

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
        $this->model('TransactionModel')->updateSuccess($_POST['id'], 'ON PROCESS');
        $transaction = $this->model('TransactionModel')->find($_POST['id']);
        $transaction['canteen'] = $this->model('UserModel')->getUserById($transaction['canteen_id']);
        $transaction['user'] = $this->model('UserModel')->getUserById($transaction['user_id']);
        $transaction['products'] = $this->model('TransactionDetailModel')->getTransactionDetailByTransactionId($transaction['id']);
        $res = new stdClass();
        $res->code = 200;
        $res->msg = 'ok';

        if ($transaction['canteen']['phone'] != null) {
            $curl = curl_init();

            $message = 'Pesanan baru telah diterima dengan rincian : 
Id Transaksi : *#' . str_pad($transaction['id'], 6, '0', STR_PAD_LEFT) . '*
Nama Pemesan : ' . $transaction['user']['name'] . '
Jenis Pemesanan : ' . ($transaction['jenis_pemesanan'] == 1 ? 'Dine In' : 'Take Away') . '
';
            if ($transaction['jenis_pemesanan'] == 1) {
                $message .= 'No meja : ' . $transaction['no_meja'] . '
';
            }
            $message .= 'Daftar Produk :
';
            foreach ($transaction['products'] as $key => $product) {
                $message .= $key + 1 . '. ' . $product['product_name'] . ' (' . $product['qty'] . ' item)
';
            }
            $message .= '
Info pesanan lebih lanjut dapat dilihat pada : ' . BASE_URL . '/c/order/' . $transaction['id'];

            try {
                curl_setopt_array(
                    $curl,
                    array(
                        CURLOPT_URL => 'https://api.fonnte.com/send',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => array(
                            'target' => $transaction['canteen']['phone'],
                            'message' => $message,
                        ),
                        CURLOPT_HTTPHEADER => array(
                            'Authorization: NEDrHqdnsVP-HYk3qmDr'
                        ),
                    )
                );

                $response = curl_exec($curl);
                curl_close($curl);
            } catch (Exception $e) {
                echo $e;
            }
        }

        echo json_encode($res);
    }
}