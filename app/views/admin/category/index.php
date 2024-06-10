<div class="container">
    <!-- Analyses -->
    <div class="analyse">
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3>Total Kategori</h3>
                    <h1><?= count($data['categories']) ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Analyses -->

    <!-- Recent Orders Table -->
    <div class="recent-orders" style="overflow: auto;">
        <h2>Data Kategori</h2>
        <a href="<?= BASE_URL ?>/a/category/create" class="btn btn-success" id="button" type="button">
            <span style="font-size: 20px" class="material-icons-sharp">add</span>
            <span>Tambah Kategori</span>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 3%">No.</th>
                    <th style="width: 46%; text-align: center">Nama</th>
                    <th style="width: 46%">Slug</th>
                    <th style="width: 5%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data['categories'] as $category) { ?>
                <tr>
                    <td style="text-align: center"><?= $no++ ?>.</td>
                    <td style="text-align: center"><?= $category['name'] ?></td>
                    <td style="text-align: center"><?= $category['slug'] ?></td>
                    <td style="align-items: center;">
                        <div style="display: flex; gap: 5px">
                            <a style="width: 30px" href="<?= BASE_URL ?>/a/category/edit/<?= $category['id'] ?>"
                                class="btn btn-primary" id="button" type="button">
                                <span style="font-size: 15px" class="material-icons-sharp">edit</span>
                            </a>
                            <button
                                onclick="deleteCategory('<?= $category['id'] ?>', '<?= BASE_URL ?>/a/category/destroy/<?= $category['id'] ?>')"
                                style="width: 30px" class="btn btn-danger" id="button" type="button">
                                <span style="font-size: 15px" class="material-icons-sharp">delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- End of Recent Orders -->
</div>