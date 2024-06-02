<?php

class Product extends Controller
{
    public function index($slug = null)
    {
        $data['title'] = 'Product ' . $slug;
        $data['user'] = $this->model('UserModel')->getUserByUsername('afrizal');
        // $this->load('header');
        $this->view('product/index', $data);
        // $this->load('footer');
    }
}
