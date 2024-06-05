<?php

class TransactionModel
{
    private $table = 'transactions';
    private $db;

    public $id, $user_id, $total_price, $status, $created_at;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert()
    {
        $this->db->query(
            'INSERT INTO ' .
            $this->table .
            ' (user_id, total_price, status, created_at) VALUES (:user_id, :total_price, :status, :created_at)',
        );
        $this->db->bind('user_id', $this->user_id);
        $this->db->bind('total_price', $this->total_price);
        $this->db->bind('status', $this->status);
        $this->db->bind('created_at', $this->created_at);

        $this->db->execute();

        return $this->db->lastInsertId();
    }
}