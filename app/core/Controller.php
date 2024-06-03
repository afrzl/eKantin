<?php

class Controller
{
    public function load($page = null)
    {
        if (isset($_SESSION['id'])) {
            $cart_count = $this->model('CartModel')->countCartByUserId($_SESSION['id']);
        }
        switch ($page) {
            case 'header':
                require_once 'app/views/templates/header.php';
                break;
            case 'footer':
                require_once 'app/views/templates/footer.php';
                break;
            case 'navigation':
                $categories = $this->model('CategoryModel')->getAllCategories();
                require_once 'app/views/templates/navigation.php';
                break;

            default:
                break;
        }
    }
    public function view($view, $data = [])
    {
        require_once 'app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once 'app/models/' . $model . '.php';
        return new $model();
    }
}