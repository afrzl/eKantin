<?php

class User extends Controller
{
    public function index()
    {
        $data['users'] = $this->model('UserModel')->getAllUsers();

        $this->view('user/index', $data);
    }
}
