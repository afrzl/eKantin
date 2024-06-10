<?php

class Order extends Controller
{
    public function index($id = null)
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        if ($id == null) {
            $data['page'] = 'order';
            $data['title'] = 'Daftar Transaksi';
            $data['transactions'] = $this->model('TransactionModel')->getTransactionsByStatus('SUCCESS');
            foreach ($data['transactions'] as $key => $transaction) {
                $data['transactions'][$key]['user'] = $this->model('UserModel')->getUserById($transaction['user_id']);
            }
            $this->view_admin('admin/transaction/index', $data);
            return;
        }

        $data['page'] = 'order';
        $data['transaction'] = $this->model('TransactionModel')->find($id);
        $data['title'] = 'Daftar Transaksi #' . str_pad($data['transaction']['id'], 6, '0', STR_PAD_LEFT);

        $data['transaction']['user'] = $this->model('UserModel')->getUserById($data['transaction']['user_id']);
        $data['transaction']['products'] = $this->model('TransactionDetailModel')->getTransactionDetailByTransactionId($data['transaction']['id']);
        $data['transaction']['canteen'] = $this->model('UserModel')->getUserById($data['transaction']['canteen_id']);

        $this->view_admin('admin/transaction/detail', $data);
        return;
    }

    public function getByStatus()
    {
        if ($_POST['status'] == '') {
            $data['transactions'] = $this->model('TransactionModel')->getAllTransaction();
        } else {
            $data['transactions'] = $this->model('TransactionModel')->getTransactionsByStatus($_POST['status']);
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
                            href="' . BASE_URL . '/a/order/detail/' . $transaction['id'] . '" class="btn btn-primary" id="button" type="button">
                            Detail
                        </a>
                    </td>
                    </tr>';
        }
    }
}