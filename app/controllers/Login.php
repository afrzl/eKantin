<?php

use Google\Client as Google_Client;
use Google\Service\Oauth2 as Google_Service_Oauth2;

class Login extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setClientId(
            '771340330909-o1o8rk9787s3nkijbjfs7i5oll78bgek.apps.googleusercontent.com'
        );
        $this->client->setClientSecret('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');
        $this->client->setRedirectUri('http://localhost/siTilang/login.php');
        $this->client->addScope('email');
        $this->client->addScope('profile');
    }

    public function index()
    {
        if (isset($_SESSION['id'])) {
            header('Location: ' . BASE_URL . '/home');
            return;
        }
        $data['login_url'] = $this->client->createAuthUrl();

        $this->view('login/index', $data);
    }

    public function index2()
    {
        if (isset($_SESSION['id'])) {
            header('Location: ' . BASE_URL . '/home');
            return;
        }
        $data['login_url'] = $this->client->createAuthUrl();

        return $this->view('login/index2', $data);
    }

    public function auth()
    {
        if ($this->model('UserModel')->authCheck($_POST)) {
            header('Location: ' . BASE_URL);
            return;
        }

        $_SESSION['message'] = 'Email atau password salah.';
        header('Location: ' . BASE_URL . '/login');
    }

    public function out()
    {
        if (isset($_SESSION['id'])) {
            unset($_SESSION['id']);
            unset($_SESSION['name']);
            unset($_SESSION['role']);
            session_destroy();
        }

        header('Location: ' . BASE_URL);
        return;
    }

    public function callback(...$code)
    {
        $code = implode('/', $code);
        if (isset($code)) {
            $token = $this->client->fetchAccessTokenWithAuthCode($code);
            $token = $this->client->getAccessToken();
            $this->client->setAccessToken($token);

            $oauth2 = new Google_Service_Oauth2($this->client);
            $user = $oauth2->userinfo->get();

            $result = $this->model('UserModel')->getUserByEmail(
                $user['email']
            );
            if ($result) {
                $_SESSION['id'] = $result['id'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['role'] = $result['role'];
                header('Location: ' . BASE_URL);
            } else {
                $data = [$user['email'], $user['name'], '12345678'];
                $this->model('UserModel')->insertUser($data);
                $result = $this->model('UserModel')->getUserByUsername(
                    $user['email']
                );
                $_SESSION['id'] = $result['id'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['role'] = $result['role'];
                header('Location: ' . BASE_URL);
            }
        }
    }
}