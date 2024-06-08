<?php


class TransactionDetailModel
{
    private $table = 'transactions_detail';
    private $db;

    public $id, $transaction_id, $product_id, $qty, $price;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert()
    {
        $this->db->query(
            'INSERT INTO ' .
            $this->table .
            ' (transaction_id, product_id, qty, price) VALUES (:transaction_id, :product_id, :qty, :price)',
        );
        $this->db->bind('transaction_id', $this->transaction_id);
        $this->db->bind('product_id', $this->product_id);
        $this->db->bind('qty', $this->qty);
        $this->db->bind('price', $this->price);

        return $this->db->execute();
    }

    public function getTransactionDetailByTransactionId($transaction_id)
    {
        $query = 'SELECT p.product_id as product_id, p.qty as qty, p.price as price, c1.name as product_name, c1.slug as product_slug, c1.image as product_image, c2.name as canteen_name, c2.email as canteen_slug
        FROM ' . $this->table . ' p LEFT JOIN products c1 ON p.product_id = c1.id LEFT JOIN users c2 ON c1.canteen_id = c2.id WHERE p.transaction_id = :transaction_id';
        $this->db->query($query);
        $this->db->bind('transaction_id', $transaction_id);

        return $this->db->resultSet();
    }

    public function getTransactionDetailByCanteenId($canteen_id)
    {
        $query = 'SELECT p.product_id as product_id, p.qty as qty, p.price as price, c1.name as product_name, c1.slug as product_slug, c1.image as product_image, c2.name as canteen_name, c2.email as canteen_slug
        FROM ' . $this->table . ' p LEFT JOIN products c1 ON p.product_id = c1.id LEFT JOIN users c2 ON c1.canteen_id = c2.id INNER JOIN transactions c3 ON c3.id = p.transaction_id WHERE c2.id = :canteen_id AND c3.id = p.transaction_id';
        $this->db->query($query);
        $this->db->bind('canteen_id', $canteen_id);

        return $this->db->resultSet();
    }

}