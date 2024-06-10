<?php

class UserModel
{
    private $table = 'users';
    private $db;

    public $id, $email, $name, $password, $phone, $role;

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
            $_SESSION['role'] = $res['role'];
            return true;
        }

        return false;
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getAllCanteens()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE role = "CANTEEN"');

        return $this->db->resultSet();
    }

    public function getUserByEmail($email)
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' WHERE email=:email'
        );
        $this->db->bind('email', $email);

        return $this->db->single();
    }

    public function getUserById($id, $pw = false)
    {
        $query = 'SELECT id, email, name, phone, role';
        if ($pw) {
            $query .= ', password';
        }
        $query .= ' FROM ' . $this->table . ' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function insert()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->db->query(
            'INSERT INTO ' .
            $this->table .
            ' (email, name, password, phone, role) VALUES (:email, :name, :password, :phone, :role)'
        );
        $this->db->bind('email', $this->email);
        $this->db->bind('name', $this->name);
        $this->db->bind('password', $this->password);
        $this->db->bind('phone', $this->phone);
        $this->db->bind('role', $this->role);

        return $this->db->execute();
    }

    public function update()
    {
        $query = 'UPDATE ' .
            $this->table .
            ' SET email = :email, name = :name, password = :password, phone = :phone, role = :role';
        $query .= ' WHERE id = :id';
        $this->db->query($query);

        $this->db->bind('id', $this->id);
        $this->db->bind('email', $this->email);
        $this->db->bind('name', $this->name);
        $this->db->bind('password', $this->password);
        $this->db->bind('phone', $this->phone);
        $this->db->bind('role', $this->role);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->execute();
    }

    public function validation()
    {
        if ($this->email == '' || $this->name == '' || $this->password == '' || $this->phone == '' || $this->role == '') {
            return false;
        }

        return true;
    }
}