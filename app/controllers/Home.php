<?php

class Home extends Controller
{
    public function index() {
        $data['nama'] = $this->model("UserModel")->getUser();
        $this->view('home/index', $data);
    }
}
