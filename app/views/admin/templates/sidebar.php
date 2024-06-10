<aside>
    <div class="toggle">
        <a href="<?= BASE_URL ?>" class="logo">
            <h2>e<span class="primary">Kantin</span></h2>
        </a>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">
                close
            </span>
        </div>
    </div>

    <div class="sidebar">
        <a href="<?= BASE_URL ?>/a/dashboard" <?php if ($data['page'] == 'dashboard'):
              echo 'class="active"';
          endif ?>>
            <span class="material-icons-sharp">
                dashboard
            </span>
            <h3>Dashboard</h3>
        </a>
        <a href="<?= BASE_URL ?>/a/user" <?php if ($data['page'] == 'users'):
              echo 'class="active"';
          endif ?>>
            <span class="material-icons-sharp">
                group
            </span>
            <h3>Kelola User</h3>
        </a>
        <a href="<?= BASE_URL ?>/a/category" <?php if ($data['page'] == 'categories'):
              echo 'class="active"';
          endif ?>>
            <span class="material-icons-sharp">
                category
            </span>
            <h3>Kelola Kategori</h3>
        </a>
        <a href="<?= BASE_URL ?>/a/product" <?php if ($data['page'] == 'products'):
              echo 'class="active"';
          endif ?>>
            <span class="material-icons-sharp">
                inventory_2
            </span>
            <h3>Kelola Produk</h3>
        </a>
        <a href="<?= BASE_URL ?>/a/order" <?php if ($data['page'] == 'order'):
              echo 'class="active"';
          endif ?>>
            <span class="material-icons-sharp">
                receipt_long
            </span>
            <h3>Kelola Pesanan</h3>
        </a>
        <a href="<?= BASE_URL ?>/login/out">
            <span class="material-icons-sharp">
                logout
            </span>
            <h3>Logout</h3>
        </a>
    </div>
</aside>