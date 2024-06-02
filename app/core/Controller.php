<?php

class Controller
{
    public function load($data = null)
    {
        switch ($data) {
            case 'header':
                require_once 'app/views/templates/header.php';
                break;
            case 'footer':
                require_once 'app/views/templates/footer.php';
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
