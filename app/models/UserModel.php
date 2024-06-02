<?php

class UserModel
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function authCheck($data)
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' WHERE email = :email LIMIT 1'
        );
        $this->db->bind('email', $data['email']);

        $res = $this->db->single();
        if (password_verify($data['password'], $res['password'])) {
            $_SESSION['id'] = $res['id'];
            $_SESSION['name'] = $res['name'];
            return true;
        }

        return false;
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getUserByUsername($email)
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' WHERE email=:email'
        );
        $this->db->bind('email', $email);

        return $this->db->single();
    }

    public function insertUser($data)
    {
        $data[2] = password_hash($data[2], PASSWORD_DEFAULT);
        $this->db->query(
            'INSERT INTO ' .
                $this->table .
                ' (email, name, password) VALUES (:email, :name, :password)'
        );
        $this->db->bind('email', $data[0]);
        $this->db->bind('name', $data[1]);
        $this->db->bind('password', $data[2]);

        return $this->db->execute();
    }
}
