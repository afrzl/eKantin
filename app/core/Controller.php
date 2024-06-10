<?php

class Controller
{
    public function load($page = null)
    {
        if (isset($_SESSION['id'])) {
            $cart_count = $this->model('CartModel')->countCartByUserId($_SESSION['id']);
        }
        $categories = $this->model('CategoryModel')->getAllCategories();
        switch ($page) {
            case 'header':
                require_once 'app/views/templates/header.php';
                break;
            case 'footer':
                require_once 'app/views/templates/footer.php';
                break;
            case 'navigation':
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

    public function views($view, $data = [])
    {
        require_once 'app/views/canteen/templates/template.php';
    }

    public function view_admin($view, $data = [])
    {
        require_once 'app/views/admin/templates/template.php';
    }

    public function model($model)
    {
        require_once 'app/models/' . $model . '.php';
        return new $model();
    }
}