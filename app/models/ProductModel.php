<?php

class ProductModel
{
    private $table = 'products';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProducts()
    {
        $this->db->query('SELECT p.id, p.name, p.slug, p.description, p.image, p.price, p.discount, p.stock, p.category_id, c1.name as category_name, c1.slug as category_slug FROM ' . $this->table . ' p JOIN categories c1 ON c1.id = p.category_id;');

        return $this->db->resultSet();
    }

    public function getProductsByCategory($category_id)
    {
        $this->db->query('SELECT p.id,p.name, p.slug, p.description, p.image, p.price, p.discount, p.stock, p.category_id, c1.name as category_name, c1.slug as category_slug
                            FROM ' . $this->table . ' p JOIN categories c1 ON c1.id = p.category_id WHERE p.category_id = :category_id');

        $this->db->bind('category_id', $category_id);

        return $this->db->resultSet();
    }

    public function getProductsByCanteen($canteen_id)
    {
        $this->db->query('SELECT p.id,p.name, p.slug, p.description, p.image, p.price, p.discount, p.stock, p.canteen_id, c1.name as category_name, c1.slug as category_slug
                            FROM ' . $this->table . ' p JOIN categories c1 ON c1.id = p.category_id JOIN users c2 ON c2.id = p.canteen_id WHERE p.canteen_id = :canteen_id');

        $this->db->bind('canteen_id', $canteen_id);

        return $this->db->resultSet();
    }

    public function getProductBySlug($slug)
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' WHERE slug=:slug'
        );
        $this->db->bind('slug', $slug);

        return $this->db->single();
    }

    // public function insertProduct($data)
    // {
    //     $data[2] = password_hash($data[2], PASSWORD_DEFAULT);
    //     $this->db->query(
    //         'INSERT INTO ' .
    //             $this->table .
    //             ' (email, name, password) VALUES (:email, :name, :password)'
    //     );
    //     $this->db->bind('email', $data[0]);
    //     $this->db->bind('name', $data[1]);
    //     $this->db->bind('password', $data[2]);

    //     return $this->db->execute();
    // }
}