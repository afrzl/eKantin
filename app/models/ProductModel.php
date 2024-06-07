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
        $this->db->query('SELECT p.id, p.name, p.slug, p.description, p.image, p.price, p.discount, p.stock, p.category_id, c1.name as category_name, c1.slug as category_slug FROM ' . $this->table . ' p JOIN categories c1 ON c1.id = p.category_id ORDER BY p.stock DESC, p.name ASC');

        return $this->db->resultSet();
    }

    public function getProductsByCategory($category_id)
    {
        $this->db->query('SELECT p.id,p.name, p.slug, p.description, p.image, p.price, p.discount, p.stock, p.category_id, c1.name as category_name, c1.slug as category_slug
                            FROM ' . $this->table . ' p JOIN categories c1 ON c1.id = p.category_id WHERE p.category_id = :category_id ORDER BY p.stock DESC, p.name ASC');

        $this->db->bind('category_id', $category_id);

        return $this->db->resultSet();
    }

    public function getProductsByCanteen($canteen_id)
    {
        $this->db->query('SELECT p.id,p.name, p.slug, p.description, p.image, p.price, p.discount, p.stock, p.canteen_id, c1.name as category_name, c1.slug as category_slug
                            FROM ' . $this->table . ' p JOIN categories c1 ON c1.id = p.category_id JOIN users c2 ON c2.id = p.canteen_id WHERE p.canteen_id = :canteen_id ORDER BY p.stock DESC, p.name ASC');

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

    public function getProductById($id)
    {
        $this->db->query(
            'SELECT * FROM ' . $this->table . ' WHERE id=:id'
        );
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getProductByKeyword($keyword, $canteen_id, $category_id)
    {
        $keyword = '%' . $keyword . '%';

        $query = 'SELECT p.id, p.name, p.slug, p.description, p.image, p.price, p.discount, p.stock, p.canteen_id, c1.name as category_name, c1.slug as category_slug FROM ' . $this->table . ' p JOIN categories c1 ON c1.id = p.category_id JOIN users c2 ON c2.id = p.canteen_id WHERE p.name LIKE :keyword';
        if ($canteen_id != '') {
            $query .= ' AND canteen_id = :canteen_id';
        }

        if ($category_id != '') {
            $query .= ' AND category_id = :category_id';
        }

        $query .= ' ORDER BY p.stock DESC, p.name ASC';

        $this->db->query($query);
        $this->db->bind('keyword', $keyword);

        if ($canteen_id != '') {
            $this->db->bind('canteen_id', $canteen_id);
        }

        if ($category_id != '') {
            $this->db->bind('category_id', $category_id);
        }

        return $this->db->resultSet();
    }

    public function updateStock($id, $stock)
    {
        $query = 'UPDATE ' .
            $this->table .
            ' SET stock = stock - :stock WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('stock', $stock);
        $this->db->bind('id', $id);

        return $this->db->execute();
    }
}