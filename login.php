<?php
require_once 'app/config/config.php';

header('Location: ' . BASE_URL . '/login/callback/' . $_GET['code']);