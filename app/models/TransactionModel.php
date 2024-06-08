<?php

class TransactionModel
{
    private $table = 'transactions';
    private $db;

    public $id, $user_id, $canteen_id, $total_price, $status, $created_at, $pin, $midtrans_id;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert()
    {
        $this->db->query(
            'INSERT INTO ' .
            $this->table .
            ' (user_id, canteen_id, total_price, status, created_at, pin, midtrans_id) VALUES (:user_id, :canteen_id, :total_price, :status, :created_at, :pin, :midtrans_id)',
        );
        $this->db->bind('user_id', $this->user_id);
        $this->db->bind('canteen_id', $this->canteen_id);
        $this->db->bind('total_price', $this->total_price);
        $this->db->bind('status', $this->status);
        $this->db->bind('created_at', $this->created_at);
        $this->db->bind('pin', $this->pin);
        $this->db->bind('midtrans_id', $this->midtrans_id);

        $this->db->execute();

        return $this->db->lastInsertId();
    }

    public function find($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function updateSuccess($id)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET status = "SUCCESS" WHERE id = :id');
        $this->db->bind('id', $id);

        return $this->db->execute();
    }

    public function getTransactionsByUserId($user_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id ORDER BY id DESC');
        $this->db->bind('user_id', $user_id);

        return $this->db->resultSet();
    }
}