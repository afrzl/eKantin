<?php

class Order extends Controller
{
    public function index()
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'order';
        $data['title'] = 'Daftar Transaksi';
        $data['transactions'] = $this->model('TransactionModel')->getTransactionsByCanteenIdAndStatus($_SESSION['id'], 'ON PROCESS');
        foreach ($data['transactions'] as $key => $transaction) {
            $data['transactions'][$key]['user'] = $this->model('UserModel')->getUserById($transaction['user_id']);
        }
        $this->views('canteen/transaction/index', $data);
    }

    public function getByStatus()
    {
        if ($_POST['status'] == '') {
            $data['transactions'] = $this->model('TransactionModel')->getTransactionsByCanteenId($_SESSION['id']);
        } else {
            $data['transactions'] = $this->model('TransactionModel')->getTransactionsByCanteenIdAndStatus($_SESSION['id'], $_POST['status']);
        }
        foreach ($data['transactions'] as $key => $transaction) {
            $user = $this->model('UserModel')->getUserById($transaction['user_id']);

            echo '<tr>
                        <td style="text-align: center">#' . str_pad($transaction['id'], 6, '0', STR_PAD_LEFT) . '</td>
                        <td style="align: center">' . $user['name'] . '</td>
                        <td style="text-align: center">Rp' . number_format($transaction['total_price'], 0, '', '.') . '</td>
                        <td style="text-align: center"> ';
            switch ($transaction['jenis_pemesanan']) {
                case '1':
                    echo 'Dine In';
                    break;
                case '2':
                    echo 'Take Away';
                    break;

                default:
                    break;
            }
            echo '</td>
                    <td style="text-align: center">' . $transaction['no_meja'] . '</td>
                    <td style="text-align: center">' . $transaction['created_at'] . '</td>
                    <td style="text-align: center">' . $transaction['status'] . '</td>
                    <td style="align: center;">
                        <a style="display: inline; width: 50px; margin-right: 6px"
                            href="' . BASE_URL . '/c/order/detail/' . $transaction['id'] . '" class="btn" id="button" type="button">
                            Detail
                        </a>
                    </td>
                    </tr>';
        }
    }
}