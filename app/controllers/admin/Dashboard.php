<?php

class Dashboard extends Controller
{
    public function index()
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }
        $data['page'] = 'dashboard';
        $data['title'] = 'Dashboard';
        $data['products'] = $this->model('ProductModel')->getAllProducts();
        $penjualan = $this->model('TransactionModel')->getTransactionsByStatus('SUCCESS');
        $price = array_column($penjualan, 'total_price');
        $data['total_penjualan'] = array_sum($price);

        $transaksi = $this->model('TransactionModel')->getAllTransaction('SUCCESS');
        $data['total_transaksi'] = count($transaksi);

        $users = $this->model('UserModel')->getAllUsers();
        $data['total_user'] = count($users);

        $this->view_admin('admin/dashboard/index', $data);
    }
}