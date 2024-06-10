<div class="container">
    <!-- Analyses -->
    <div class="analyse">
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3>Total Produk</h3>
                    <h1><?= count($data['products']) ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Analyses -->

    <!-- Recent Orders Table -->
    <div class="recent-orders" style="overflow: auto;">
        <h2>Data Produk</h2>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 3%">No.</th>
                    <th style="width: 15%; text-align: center">Gambar</th>
                    <th style="width: 20%">Nama Produk</th>
                    <th style="width: 30%">Deskripsi</th>
                    <th style="width: 5%">Harga</th>
                    <th style="width: 12%">Kantin</th>
                    <th style="width: 15%">Stok</th>
                    <th style="width: 5%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data['products'] as $product) { ?>
                    <tr>
                        <td style="text-align: center"><?= $no++ ?>.</td>
                        <td style="align: center"><img src="<?= ASSETS . '/images/products/' . $product['image'] ?>"
                                style="width: 80%" alt="<?= $product['name'] ?>">
                        </td>
                        <td style="text-align: left"><?= $product['name'] ?></td>
                        <td style="text-align: left"><?= $product['description'] ?></td>
                        <td style="text-align: center">Rp<?= number_format($product['price'], 0, '', '.') ?></td>
                        <td style="text-align: center"><?= $product['canteen_name'] ?></td>
                        <td style="text-align: center"><?= $product['stock'] ?></td>
                        <td style="align: center;">
                            <div style="display: flex; gap: 5px">
                                <button
                                    onclick="deleteProduct('<?= $product['id'] ?>', '<?= BASE_URL ?>/a/product/destroy/<?= $product['id'] ?>')"
                                    style="width: 30px" class="btn btn-danger" id="button" type="button">
                                    <span style="font-size: 15px" class="material-icons-sharp">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="#">Show All</a>
    </div>
    <!-- End of Recent Orders -->
</div>