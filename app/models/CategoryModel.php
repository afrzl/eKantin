<?php

class CategoryModel
{
    private $table = 'categories';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCategories()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getCategoryBySlug($slug)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE slug = :slug');
        $this->db->bind('slug', $slug);

        return $this->db->single();
    }
}