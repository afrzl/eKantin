<?php

class Category extends Controller
{
    public function index()
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'categories';
        $data['title'] = 'Kategori';
        $data['categories'] = $this->model('CategoryModel')->getAllCategories();

        $this->view_admin('admin/category/index', $data);
        return;
    }

    public function create($category = null)
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'categories';
        $data['title'] = 'Kategori';
        $data['subpage'] = 'create';
        if ($category != null) {
            $data['category'] = $category;
        }
        $this->view_admin('admin/category/create', $data);
        return;
    }

    public function store()
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $category = $this->model('CategoryModel');
        $category->name = $_POST['name'];
        $category->slug = $_POST['slug'];

        if (!$category->validation()) {
            $category = (array) $category;
            $_SESSION['flash'] = 'Harap isi semua data';
            $this->create($category);
            return;
        }

        if (!empty($this->model('CategoryModel')->getCategoryBySlug($category->slug))) {
            $category = (array) $category;
            $_SESSION['flash'] = 'Slug sudah ada.';
            $this->create($category);
            return;
        }

        $category->insert();

        $_SESSION['flash'] = 'Sukses menambahkan data';
        header("Location: " . BASE_URL . "/a/category");
    }

    public function edit($id, $category = null)
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $data['page'] = 'categories';
        $data['title'] = 'Edit Kategori';
        $data['subpage'] = 'edit';
        if ($category != null) {
            $data['category'] = $category;
        } else {
            $data['category'] = $this->model('CategoryModel')->getCategoryById($id);
        }
        if (!$data['category']) {
            echo '404 - not found';
            return;
        }
        $this->view_admin('admin/category/create', $data);
    }

    public function update($id)
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $category = $this->model('CategoryModel')->getCategoryById($id);
        $slug = $category['slug'];
        if (!empty($category)) {
            $category = $this->model('CategoryModel');
        }

        $category = $this->model('CategoryModel');
        $category->id = $id;
        $category->name = $_POST['name'];
        $category->slug = $_POST['slug'];

        if (!$category->validation()) {
            $category = (array) $category;
            $_SESSION['flash'] = 'Harap isi semua data';
            $this->edit($id, $category);
        }

        if ($slug != $_POST['slug'] && !empty($this->model('CategoryModel')->getCategoryBySlug($category->slug))) {
            $category = (array) $category;
            $_SESSION['flash'] = 'Slug sudah ada.';
            $this->create($category);
            return;
        }

        $category->update();

        $_SESSION['flash'] = 'Sukses mengubah data';
        header("Location: " . BASE_URL . "/a/category");
    }

    public function destroy()
    {
        if ($_SESSION['role'] != 'ADMIN') {
            header("Location: " . BASE_URL);
        }

        $this->model('CategoryModel')->delete($_POST['id']);

        $res = new stdclass();
        $res->code = 200;
        $res->msg = 'Kategori berhasil dihapus';
        $_SESSION['flash'] = $res->msg;
        echo json_encode($res);
        return;
    }
}