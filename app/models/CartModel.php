<?php

class CartModel
{
    private $table = 'cart';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCartByUserIdProductId($user_id, $product_id)
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' WHERE user_id=:user_id AND product_id=:product_id'
        );
        $this->db->bind('user_id', $user_id);
        $this->db->bind('product_id', $product_id);

        return $this->db->single();
    }

    public function countCartByUserId($user_id)
    {
        $this->db->query('SELECT SUM(qty) as sum FROM ' . $this->table . ' WHERE user_id = :user_id ');
        $this->db->bind('user_id', $user_id);

        $data = $this->db->single();
        return $data['sum'];
    }

    public function insert($data)
    {
        $this->db->query(
            'INSERT INTO ' .
                $this->table .
                ' (user_id, product_id, qty) VALUES (:user_id, :product_id, :qty)'
        );
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('product_id', $data['product_id']);
        $this->db->bind('qty', $data['qty']);

        return $this->db->execute();
    }

    public function update($id, $data)
    {
        $this->db->query(
            'UPDATE ' .
                $this->table .
                ' SET user_id = :user_id, product_id = :product_id, qty = :qty WHERE id = :id'
        );
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('product_id', $data['product_id']);
        $this->db->bind('qty', $data['qty']);
        $this->db->bind('id', $id);

        return $this->db->execute();
    }
}
