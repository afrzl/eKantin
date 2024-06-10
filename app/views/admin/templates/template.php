<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/admin/style.css">
    <title><?= $data['title'] ?> | eKantin</title>
    <link rel="stylesheet" href="<?= ASSETS ?>/css/toastify.css">
</head>

<body>
    <!-- Sidebar Section -->
    <?php require_once 'app/views/admin/templates/sidebar.php' ?>
    <!-- End of Sidebar Section -->

    <!-- Main Content -->
    <main>
        <header>
            <h1><?= $data['title'] ?></h1>
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>

                <div class="profile">
                    <div class="info" style="text-align: right">
                        <p>Halo, <b><?= $_SESSION['name'] ?></b></p>
                        <small class="text-muted"><?= ucfirst(strtolower($_SESSION['role'])) ?></small>
                    </div>
                </div>

            </div>
        </header>
        <?php require_once 'app/views/' . $view . '.php' ?>
    </main>
    <!-- End of Main Content -->


    <script src="<?= ASSETS ?>/js/toastify.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= ASSETS ?>/js/admin/index.js"></script>

    <?php
    if (isset($_SESSION['flash'])) {
        echo '<script type="text/javascript">';
        echo 'toast("' . $_SESSION['flash'] . '");';
        echo '</script>';

        unset($_SESSION['flash']);
    }
    ?>

    <script>
    function deleteUser(id, url) {
        Swal.fire({
            title: "Konfirmasi",
            text: "Apakah kamu yakin akan menghapus user ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak"
        }).then((result) => {
            if (result.isConfirmed) {
                xhttp = new XMLHttpRequest();

                let body = "";
                body += "id=" + encodeURIComponent(id);

                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let res = JSON.parse(xhttp.responseText);
                        if (res.code === 200) {
                            window.location.reload();
                        } else {
                            alert(res.msg);
                        }
                    }
                };

                xhttp.open("POST", url, false);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(body);
            }
        });
    }
    </script>
</body>

</html>