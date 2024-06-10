<?php

class User extends Controller
{
    public function index()
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'users';
        $data['title'] = 'Daftar User';
        $data['users'] = $this->model('UserModel')->getAllUsers();

        $this->view_admin('admin/user/index', $data);
        return;
    }

    public function create($user = null)
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'users';
        $data['title'] = 'Tambah User';
        $data['subpage'] = 'create';
        if ($user != null) {
            $data['user'] = $user;
        }
        $this->view_admin('admin/user/create', $data);
        return;
    }

    public function store()
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $user = $this->model('UserModel');
        $user->email = $_POST['email'];
        $user->name = $_POST['name'];
        $user->password = $_POST['password'];
        $user->phone = $_POST['phone'];
        $user->role = $_POST['role'];

        if (!$user->validation()) {
            $user = (array) $user;
            $_SESSION['flash'] = 'Harap isi semua data';
            $this->create($user);
        }

        if ($_POST['password'] != $_POST['confirm_password']) {
            $user = (array) $user;
            $_SESSION['flash'] = 'Konfirmasi password tidak sesuai';
            $this->create($user);
        }

        $user->insert();

        $_SESSION['flash'] = 'Sukses menambahkan data';
        header("Location: " . BASE_URL . "/a/user");
    }

    public function edit($id, $user = null)
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'users';
        $data['title'] = 'Edit User';
        $data['subpage'] = 'edit';
        if ($user != null) {
            $data['user'] = $user;
        } else {
            $data['user'] = $this->model('UserModel')->getUserById($id);
        }
        if (!$data['user']) {
            echo '404 - not found';
            return;
        }
        $this->view_admin('admin/user/create', $data);
    }

    public function update($id)
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $user = $this->model('UserModel')->getUserById($id, true);
        $password = $user['password'];
        if (!empty($user)) {
            $user = $this->model('UserModel');
        }

        $user = $this->model('UserModel');
        $user->id = $id;
        $user->email = $_POST['email'];
        $user->name = $_POST['name'];
        $user->password = ($_POST['password'] == '' ? $password : password_hash($_POST['password'], PASSWORD_DEFAULT));
        $user->phone = $_POST['phone'];
        $user->role = $_POST['role'];

        if (!$user->validation()) {
            $user = (array) $user;
            $_SESSION['flash'] = 'Harap isi semua data';
            $this->edit($id, $user);
        }

        if ($_POST['password'] != $_POST['confirm_password']) {
            $user = (array) $user;
            $_SESSION['flash'] = 'Konfirmasi password tidak sesuai';
            $this->edit($id, $user);
        }

        $user->update();

        $_SESSION['flash'] = 'Sukses mengubah data';
        header("Location: " . BASE_URL . "/a/user");
    }

    public function destroy()
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $this->model('UserModel')->delete($_POST['id']);

        $res = new stdclass();
        $res->code = 200;
        $res->msg = 'User berhasil dihapus';
        $_SESSION['flash'] = $res->msg;
        echo json_encode($res);
        return;
    }
}