<div class="container">
    <!-- Analyses -->
    <div class="analyse">
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3>Total Transaksi Sukses</h3>
                    <h1><?= count($data['transactions_success']) ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Analyses -->

    <!-- Recent Orders Table -->
    <div class="recent-orders" style="overflow: auto;">
        <h2><?= $data['title'] ?></h2>
        <div class="input-group" style="display: flex; flex-direction: row; align-items: center;">
            <div style="width: 6rem">
                <label for="name">Status :</label>
            </div>
            <select name="status" onchange="getStatus(this, '<?= BASE_URL ?>/c/order/getByStatus')" id="">
                <option value="">SEMUA</option>
                <option selected value="ON PROCESS">ON PROCESS</option>
                <option value="SUCCESS">SUCCESS</option>
                <option value="PENDING">PENDING</option>
                <option value="CANCEL">CANCEL</option>
            </select>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10%">Id Transaksi</th>
                    <th style="width: 15%; text-align: center">Nama Pelanggan</th>
                    <th style="width: 20%; text-align: center">Harga Total</th>
                    <th style="width: 15%">Jenis Pemesanan</th>
                    <th style="width: 5%">No Meja</th>
                    <th style="width: 20%">Tanggal Transaksi</th>
                    <th style="width: 15%">Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="tbody-order">
                <?php foreach ($data['transactions'] as $transaction) { ?>
                    <tr>
                        <td style="text-align: center">#<?= str_pad($transaction['id'], 6, '0', STR_PAD_LEFT) ?></td>
                        <td style="align: center"><?= $transaction['user']['name'] ?></td>
                        <td style="text-align: center">Rp<?= number_format($transaction['total_price'], 0, '', '.') ?></td>
                        <td style="text-align: center">
                            <?php switch ($transaction['jenis_pemesanan']) {
                                case '1':
                                    echo 'Dine In';
                                    break;
                                case '2':
                                    echo 'Take Away';
                                    break;

                                default:
                                    break;
                            } ?>
                        </td>
                        <td style="text-align: center"><?= $transaction['no_meja'] ?></td>
                        <td style="text-align: center"><?= $transaction['created_at'] ?></td>
                        <td style="text-align: center"><?= $transaction['status'] ?></td>
                        <td style="align: center;">
                            <a style="display: inline; width: 50px; margin-right: 6px"
                                href="<?= BASE_URL ?>/c/order/<?= $transaction['id'] ?>" class="btn btn-primary" id="button"
                                type="button">
                                Detail
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- End of Recent Orders -->
</div>