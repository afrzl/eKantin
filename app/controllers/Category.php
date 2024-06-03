<?php

class Category extends Controller
{
    public function index($slug = null)
    {
        $category = $this->model('CategoryModel')->getCategoryBySlug($slug);
        $data['title'] = 'Landing Page';
        $data['subtitle'] = 'Produk kategori ' . $category['name'];
        // $data['user'] = $this->model('UserModel')->getUserByUsername('afrizal');
        $data['products'] = $this->model('ProductModel')->getProductsByCategory($category['id']);
        $data['canteens'] = $this->model('UserModel')->getAllCanteens();

        $this->load('header');
        $this->load('navigation');
        $this->view('home/index', $data);
        $this->load('footer');
    }
}