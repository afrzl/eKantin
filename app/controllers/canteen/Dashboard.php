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
        $penjualan = $this->model('TransactionDetailModel')->getTransactionDetailByCanteenId($_SESSION['id']);
        $price = array_column($penjualan, 'price');
        $data['total_penjualan'] = array_sum($price);

        $this->views('canteen/dashboard/index', $data);
    }
}