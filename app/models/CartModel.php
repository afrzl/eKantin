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

    public function getCartProducts($user_id)
    {
        $this->db->query('SELECT p.id as id, p.product_id as product_id, p.qty as qty, c1.name as product_name, c1.slug as product_slug, c1.image as product_image, c1.price as product_price, c1.stock as product_stock, c1.canteen_id as product_canteen_id
                            FROM ' . $this->table . ' p JOIN products c1 ON c1.id = p.product_id WHERE p.user_id = :user_id');

        $this->db->bind('user_id', $user_id);

        return $this->db->resultSet();
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

    public function delete($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);

        return $this->db->execute();
    }


}