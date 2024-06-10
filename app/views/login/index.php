<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($data['title'])
        ? $data['title'] . ' - siTilang'
        : 'siTilang' ?></title>
    <link rel="stylesheet" href="<?= ASSETS ?>/css/style_login.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Masuk</header>
                <form action="<?= BASE_URL ?>/login/auth" method="post">
                    <?php if (isset($_SESSION['message'])) {
                        echo '<p style="color: red;">' .
                            $_SESSION['message'] .
                            '</p>';
                        unset($_SESSION['message']);
                    } ?>
                    <div class="field input-field">
                        <input type="email" placeholder="Email" name="email" class="input" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Kata Sandi" name="password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <input type="submit" value="Masuk">
                    </div>
                </form>
            </div>

            <div class="line"></div>
            <div class="media-options">
                <a href="<?= $data['login_url'] ?>" class="field google">
                    <img src="<?= ASSETS ?>/images/google.png" alt="" class="google-img">
                    <span>Masuk dengan Google</span>
                </a>
            </div>

        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form action="#">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Create password" class="password">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirm password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button>Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="images/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>
    </section>

    <!-- JavaScript -->
    <script src="<?= ASSETS ?>/js/script_login.js"></script>
</body>

</html>