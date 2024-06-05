<?php

class Order extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            $data['title'] = 'Riwayat Pesanan';
            $data['transactions'] = $this->model('TransactionModel')->getTransactionsByUserId($_SESSION['id']);
            foreach ($data['transactions'] as $key => $transaction) {
                $data['transactions'][$key]['details'] = $this->model('TransactionDetailModel')->getTransactionDetailByTransactionId($transaction['id']);
            }

            $this->load('header');
            $this->view('order/index', $data);
            $this->load('footer');
            return;
        }

        $data['title'] = 'Riwayat Pesanan';
        $data['transactions'] = $this->model('TransactionModel')->getTransactionsByUserId($_SESSION['id']);
        foreach ($data['transactions'] as $key => $transaction) {
            $data['transactions'][$key]['details'] = $this->model('TransactionDetailModel')->getTransactionDetailByTransactionId($transaction['id']);
        }

        $this->load('header');
        $this->view('order/detail', $data);
        $this->load('footer');
        return;
    }
}