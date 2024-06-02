<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($data['title'])
        ? $data['title'] . ' - siTilang'
        : 'siTilang' ?>
    </title>

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body id="top">
    <header>
        <div class="container">
            <a href="<?= BASE_URL ?>" class="logo">
                <img src="<?= ASSETS ?>/images/stis.png" width="50px" alt="">
                <h2>siTilang</h2>
            </a>
            <div class="navbar-wrapper">
                <button class="navbar-menu-btn" data-navbar-toggle-btn>
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
                <nav class="navbar" data-navbar>
                    <ul class="navbar-list">
                        <li class="nav-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">Pengumuman</a>
                        </li>
                        <?php if (isset($_SESSION['id'])) { ?>
                        <label for="profile2" style="cursor: pointer; align-items: center; display: flex"
                            class="profile-dropdown">
                            <input type="checkbox" id="profile2">
                            <a class="nav-link">Halo, <?= $_SESSION[
                                'name'
                            ] ?></a>
                            <label for="profile2"><i class="mdi mdi-menu"></i></label>
                            <ul>
                                <li><a href="#">Profile</a></li>
                                <li><a href="<?= BASE_URL ?>/login/out">Logout</a>
                                </li>
                            </ul>
                        </label>
                        <?php } else { ?>
                        <a href="<?= BASE_URL ?>/login"><button class="btn btn-primary">LOGIN</button></a>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>