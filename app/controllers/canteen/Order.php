<?php

class Order extends Controller
{
    public function index($id = null)
    {
        if ($_SESSION['role'] != 'CANTEEN') {
            header("Location: " . BASE_URL);
        }

        if ($id == null) {
            $data['page'] = 'order';
            $data['title'] = 'Daftar Transaksi';
            $data['transactions_success'] = $this->model('TransactionModel')->getTransactionsByCanteenIdAndStatus($_SESSION['id'], 'SUCCESS');
            $data['transactions'] = $this->model('TransactionModel')->getTransactionsByCanteenIdAndStatus($_SESSION['id'], 'ON PROCESS');
            foreach ($data['transactions'] as $key => $transaction) {
                $data['transactions'][$key]['user'] = $this->model('UserModel')->getUserById($transaction['user_id']);
            }
            $this->views('canteen/transaction/index', $data);
            return;
        }

        $data['page'] = 'order';
        $data['transaction'] = $this->model('TransactionModel')->find($id);
        if ($data['transaction']['canteen_id'] != $_SESSION['id']) {
            header("Location: " . BASE_URL);
        }
        $data['title'] = 'Daftar Transaksi #' . str_pad($data['transaction']['id'], 6, '0', STR_PAD_LEFT);

        $data['transaction']['user'] = $this->model('UserModel')->getUserById($data['transaction']['user_id']);
        $data['transaction']['products'] = $this->model('TransactionDetailModel')->getTransactionDetailByTransactionId($data['transaction']['id']);

        $this->views('canteen/transaction/detail', $data);
        return;
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

    public function selesaiPesanan()
    {
        $data['transaction'] = $this->model('TransactionModel')->find($_POST['id']);

        if ($_SESSION['role'] != $data['transaction']['canteen_id']) {
            header("Location: " . BASE_URL);
        }

        if ($_POST['pin'] == $data['transaction']['pin']) {
            $this->model('TransactionModel')->updateSuccess($_POST['id'], 'SUCCESS');

            $_SESSION['flash'] = 'Pesanan berhasil diselesaikan';
            header("Location: " . BASE_URL . '/c/order/' . $data['transaction']['id']);
            return;
        }

        $_SESSION['flash'] = 'PIN transaksi salah';
        header("Location: " . BASE_URL . '/c/order/' . $data['transaction']['id']);

    }
}