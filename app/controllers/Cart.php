<?php

class Cart extends Controller
{
    public function store()
    {
        $cart = $this->model('CartModel')->getCartByUserIdProductId($_POST['user_id'], $_POST['product_id']);
        if ($cart) {
            $_POST['qty'] += $cart['qty'];
            echo $_POST['user_id'];
            $this->model("CartModel")->update($cart['id'], $_POST);
            echo $this->model('CartModel')->countCartByUserId($_SESSION['id']);
            return;
        }

        $this->model("CartModel")->insert($_POST);
        echo $this->model('CartModel')->countCartByUserId($_SESSION['id']);
        return;
    }
}