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
        <a href="<?= BASE_URL ?>/c/product/create" class="btn" id="button" type="button">
            <span style="font-size: 20px" class="material-icons-sharp">add</span>
            <span>Tambah Produk</span>
        </a>
        <table>
            <thead>
                <tr>
                    <th style="width: 3%">No.</th>
                    <th style="width: 15%; text-align: center">Gambar</th>
                    <th style="width: 20%">Nama Produk</th>
                    <th style="width: 35%">Deskripsi</th>
                    <th style="width: 5%">Harga</th>
                    <th style="width: 15%">Stok</th>
                    <th>Aksi</th>
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
                        <td style="text-align: center"><?= $product['stock'] ?></td>
                        <td style="align: center;">
                            <a style="display: inline; width: 30px; margin-right: 6px"
                                href="<?= BASE_URL ?>/c/product/edit/<?= $product['id'] ?>" class="btn" id="button"
                                type="button">
                                <span style="font-size: 15px" class="material-icons-sharp">edit</span>
                            </a>
                            <button
                                onclick="deleteProduct('<?= $product['id'] ?>', '<?= BASE_URL ?>/c/product/destroy/<?= $product['id'] ?>')"
                                style="display: inline; width: 30px; margin-right: 6px"
                                href="<?= BASE_URL ?>/c/product/create" class="btn" id="button" type="button">
                                <span style="font-size: 15px" class="material-icons-sharp">delete</span>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="#">Show All</a>
    </div>
    <!-- End of Recent Orders -->
</div>