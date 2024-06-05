<?php

class TransactionModel
{
    private $table = 'transactions';
    private $db;

    public $id, $user_id, $total_price, $status, $created_at, $pin;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert()
    {
        $this->db->query(
            'INSERT INTO ' .
            $this->table .
            ' (user_id, total_price, status, created_at, pin) VALUES (:user_id, :total_price, :status, :created_at, :pin)',
        );
        $this->db->bind('user_id', $this->user_id);
        $this->db->bind('total_price', $this->total_price);
        $this->db->bind('status', $this->status);
        $this->db->bind('created_at', $this->created_at);
        $this->db->bind('pin', $this->pin);

        $this->db->execute();

        return $this->db->lastInsertId();
    }

    public function getTransactionsByUserId($user_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id ORDER BY created_at DESC');
        $this->db->bind('user_id', $user_id);

        return $this->db->resultSet();
    }
}