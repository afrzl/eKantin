<?php

class CategoryModel
{
    private $table = 'categories';
    private $db;

    public $id, $name, $slug;

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

    public function getCategoryById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function insert()
    {
        $this->db->query(
            'INSERT INTO ' .
            $this->table .
            ' (name, slug) VALUES (:name, :slug)'
        );
        $this->db->bind('name', $this->name);
        $this->db->bind('slug', $this->slug);

        return $this->db->execute();
    }

    public function update()
    {
        $query = 'UPDATE ' .
            $this->table .
            ' SET name = :name, slug = :slug';
        $query .= ' WHERE id = :id';
        $this->db->query($query);

        $this->db->bind('id', $this->id);
        $this->db->bind('name', $this->name);
        $this->db->bind('slug', $this->slug);

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
        if ($this->name == '' || $this->slug == '') {
            return false;
        }

        return true;
    }
}