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

}