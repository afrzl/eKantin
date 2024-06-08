<?php

class ProductModel
{
    private $table = 'products';
    private $db;

    public $id, $name, $slug, $description, $image, $price, $discount, $stock, $category_id, $canteen_id;

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

    public function insert()
    {
        $this->db->query(
            'INSERT INTO ' .
            $this->table .
            ' (name, slug, description, image, price, discount, stock, category_id, canteen_id) VALUES (:name, :slug, :description, :image, :price, :discount, :stock, :category_id, :canteen_id)',
        );

        $this->db->bind('name', $this->name);
        $this->db->bind('slug', $this->slug);
        $this->db->bind('description', $this->description);
        $this->db->bind('image', $this->image);
        $this->db->bind('price', $this->price);
        $this->db->bind('discount', $this->discount);
        $this->db->bind('stock', $this->stock);
        $this->db->bind('category_id', $this->category_id);
        $this->db->bind('canteen_id', $this->canteen_id);

        return $this->db->execute();
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

    public function update()
    {

        $query = 'UPDATE ' .
            $this->table .
            ' SET name = :name, slug = :slug, description = :description, price = :price, discount = :discount, stock = :stock, category_id = :category_id, canteen_id = :canteen_id';
        if ($this->image != null) {
            $query .= ', image = :image';
        }
        $query .= ' WHERE id = :id';
        $this->db->query($query);

        $this->db->bind('id', $this->id);
        $this->db->bind('name', $this->name);
        $this->db->bind('slug', $this->slug);
        $this->db->bind('description', $this->description);
        if ($this->image != null) {
            $this->db->bind('image', $this->image);
        }
        $this->db->bind('price', $this->price);
        $this->db->bind('discount', $this->discount);
        $this->db->bind('stock', $this->stock);
        $this->db->bind('category_id', $this->category_id);
        $this->db->bind('canteen_id', $this->canteen_id);

        return $this->db->execute();
    }

    public function delete($id)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->execute();
    }
}