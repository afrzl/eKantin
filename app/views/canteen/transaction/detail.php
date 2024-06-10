<div class="container">
    <div class="recent-orders" style="overflow: auto;">
        <div class="input-group" style="display: flex; flex-direction: row; align-items: center;">
            <table style="font-size: 15px">
                <tr style="line-height: 2rem">
                    <td style="width: 10rem">Id Transaksi </td>
                    <td>: <b>#<?= str_pad($data['transaction']['id'], 6, '0', STR_PAD_LEFT) ?></b></td>
                </tr>
                <tr style="line-height: 2rem">
                    <td style="width: 10rem">Status Pemesanan </td>
                    <td>: <?= $data['transaction']['status'] ?></td>
                </tr>
                <tr style="line-height: 2rem">
                    <td style="width: 10rem">Tanggal Pemesanan </td>
                    <td>: <?= $data['transaction']['created_at'] ?></td>
                </tr>
                <tr style="line-height: 2rem">
                    <td style="width: 10rem">Nama Pemesan </td>
                    <td>: <?= $data['transaction']['user']['name'] ?></td>
                </tr>
                <tr style="line-height: 2rem">
                    <td style="width: 10rem">Jenis Pemesan </td>
                    <td>: <?= $data['transaction']['jenis_pemesanan'] == 1 ? 'Dine In' : 'Take Away' ?></td>
                </tr>
                <?php
                if ($data['transaction']['jenis_pemesanan'] == 1) { ?>
                    <tr style="line-height: 2rem">
                        <td style="width: 10rem">No meja </td>
                        <td>: <?= $data['transaction']['no_meja'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <table class="table" style="font-size: 14px; margin-bottom: 2rem">
            <thead>
                <tr>
                    <th style="width: 3%">No.</th>
                    <th style="width: 15%; text-align: center">Gambar</th>
                    <th style="width: 20%">Nama Produk</th>
                    <th style="width: 20%">QTY</th>
                    <th style="width: 5%">Harga</th>
                </tr>
            </thead>
            <tbody id="tbody-order">
                <?php
                $no = 1;
                foreach ($data['transaction']['products'] as $product) { ?>
                    <tr>
                        <td style="text-align: center"><?= $no++ ?>.</td>
                        <td style="align-items: center"><img
                                src="<?= ASSETS . '/images/products/' . $product['product_image'] ?>" style="width: 40%"
                                alt="<?= $product['product_name'] ?>">
                        </td>
                        <td style="text-align: center"><?= $product['product_name'] ?></td>
                        <td style="text-align: center"><?= $product['qty'] ?> item</td>
                        <td style="text-align: center">Rp<?= number_format($product['price'], 0, '', '.') ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php if ($data['transaction']['status'] == 'ON PROCESS') { ?>
            <div style="margin-bottom: 3rem; display: flex; float: right;">
                <form action="<?= BASE_URL ?>/c/order/selesaiPesanan" method="POST">
                    <label for="pin">PIN :</label>
                    <input type="hidden" name="id" value="<?= $data['transaction']['id'] ?>" required>
                    <input type="number" name="pin" required placeholder="Cth: 123456">
                    <input type="submit" value="Selesaikan Pesanan">
                </form>
            </div>
        <?php } ?>
    </div>
    <!-- End of Recent Orders -->
</div>