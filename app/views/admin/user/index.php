<div class="container">
    <!-- Analyses -->
    <div class="analyse">
        <div class="sales">
            <div class="status">
                <div class="info">
                    <h3>Total User</h3>
                    <h1><?= count($data['users']) ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Analyses -->

    <!-- Recent Orders Table -->
    <div class="recent-orders" style="overflow: auto;">
        <h2>Data User</h2>
        <a href="<?= BASE_URL ?>/a/user/create" class="btn btn-success" id="button" type="button">
            <span style="font-size: 20px" class="material-icons-sharp">add</span>
            <span>Tambah User</span>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 3%">No.</th>
                    <th style="width: 25%; text-align: center">Email</th>
                    <th style="width: 30%">Nama</th>
                    <th style="width: 20%">No HP</th>
                    <th style="width: 10%">Hak Akses</th>
                    <th style="width: 5%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data['users'] as $user) { ?>
                    <tr>
                        <td style="text-align: center"><?= $no++ ?>.</td>
                        <td style="text-align: left"><?= $user['email'] ?></td>
                        <td style="text-align: left"><?= $user['name'] ?></td>
                        <td style="text-align: center"><?= $user['phone'] ?></td>
                        <td style="text-align: center"><?= $user['role'] ?></td>
                        <td style="align-items: center;">
                            <div style="display: flex; gap: 5px">
                                <a style="width: 30px" href="<?= BASE_URL ?>/a/user/edit/<?= $user['id'] ?>"
                                    class="btn btn-primary" id="button" type="button">
                                    <span style="font-size: 15px" class="material-icons-sharp">edit</span>
                                </a>
                                <button
                                    onclick="deleteUser('<?= $user['id'] ?>', '<?= BASE_URL ?>/a/user/destroy/<?= $user['id'] ?>')"
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