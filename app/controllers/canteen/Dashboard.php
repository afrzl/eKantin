<?php

class Dashboard extends Controller
{
    public function index()
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }
        $data['page'] = 'dashboard';
        $data['title'] = 'Dashboard';
        $data['products'] = $this->model('ProductModel')->getProductsByCanteen($_SESSION['id']);
        $transaksi = $this->model('TransactionModel')->getTransactionsSuccessByCanteenId($_SESSION['id']);
        $price = array_column($transaksi, 'total_price');
        $data['total_penjualan'] = array_sum($price);

        $data['total_transaksi'] = count($transaksi);

        $this->views('canteen/dashboard/index', $data);
    }
}