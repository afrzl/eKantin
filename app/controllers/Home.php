<?php
class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Landing Page';
        $data['user'] = $this->model('UserModel')->getUserByUsername('afrizal');
        $this->load('header');
        $this->view('home/index', $data);
        $this->load('footer');
    }

    public function index2()
    {
        return $this->view('home/index2');
    }
}
