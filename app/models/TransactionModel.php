<?php

class TransactionModel
{
    private $table = 'transactions';
    private $db;

    public $id, $user_id, $canteen_id, $total_price, $status, $jenis_pemesanan, $no_meja, $created_at, $pin, $midtrans_id;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert()
    {
        $this->db->query(
            'INSERT INTO ' .
            $this->table .
            ' (user_id, canteen_id, total_price, status, jenis_pemesanan, no_meja, created_at, pin, midtrans_id) VALUES (:user_id, :canteen_id, :total_price, :status, :jenis_pemesanan, :no_meja, :created_at, :pin, :midtrans_id)',
        );
        $this->db->bind('user_id', $this->user_id);
        $this->db->bind('canteen_id', $this->canteen_id);
        $this->db->bind('total_price', $this->total_price);
        $this->db->bind('status', $this->status);
        $this->db->bind('jenis_pemesanan', $this->jenis_pemesanan);
        $this->db->bind('no_meja', $this->no_meja);
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

    public function updateSuccess($id, $status)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET status = :status WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->bind('status', $status);

        return $this->db->execute();
    }

    public function getAllTransaction($status = null)
    {
        $query = 'SELECT * FROM ' . $this->table;
        if ($status != null) {
            $query .= ' WHERE status = :status';
        }
        $query .= ' ORDER BY id DESC';
        $this->db->query($query);

        if ($status != null) {
            $this->db->bind('status', $status);
        }

        return $this->db->resultSet();
    }

    public function getTransactionsByUserId($user_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :user_id ORDER BY id DESC');
        $this->db->bind('user_id', $user_id);

        return $this->db->resultSet();
    }

    public function getTransactionsByCanteenId($canteen_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE canteen_id = :canteen_id ORDER BY id DESC');
        $this->db->bind('canteen_id', $canteen_id);

        return $this->db->resultSet();
    }

    public function getTransactionsByStatus($status)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE status = :status ORDER BY id DESC');
        $this->db->bind('status', $status);

        return $this->db->resultSet();
    }

    public function getTransactionsByCanteenIdAndStatus($canteen_id, $status)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE canteen_id = :canteen_id AND status = :status ORDER BY id DESC');
        $this->db->bind('canteen_id', $canteen_id);
        $this->db->bind('status', $status);

        return $this->db->resultSet();
    }

    public function getTransactionsSuccessByCanteenId($canteen_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE canteen_id = :canteen_id AND status = "SUCCESS" ORDER BY id DESC');
        $this->db->bind('canteen_id', $canteen_id);

        return $this->db->resultSet();
    }
}