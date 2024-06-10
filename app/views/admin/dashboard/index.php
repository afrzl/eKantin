<div class="container">
    <!-- Analyses -->
    <div class="analyse">
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3>Total User</h3>
                    <h1><?= $data['total_user'] ?></h1>
                </div>
            </div>
        </div>
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3>Total Produk</h3>
                    <h1><?= count($data['products']) ?></h1>
                </div>
            </div>
        </div>
        <div class="visits">
            <div class="status">
                <div class="info">
                    <h3>Total Penjualan</h3>
                    <h1>Rp<?= number_format($data['total_penjualan'], 0, '', '.') ?></h1>
                </div>
            </div>
        </div>
        <div class="visits">
            <div class="status">
                <div class="info">
                    <h3>Total Transaksi Sukses</h3>
                    <h1><?= $data['total_transaksi'] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Analyses -->
</div>