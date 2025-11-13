<?php

/**
 * Controller User
 * Mengatur tampilan daftar user dan detail user
 */
class User extends Controller
{
    // Tampilkan daftar pengguna
    public function index()
    {
        $data['judul'] = 'Daftar Users';
        $data['users'] = $this->model('User_model')->getAllUsers();

        $this->view('templates/header', $data);
        $this->view('list', $data);
        $this->view('templates/footer');
    }

    // Tampilkan detail pengguna berdasarkan id
    public function detail($id = null)
    {
        $data['judul'] = 'Detail User';
        $data['user'] = $this->model('User_model')->getUserById($id);

        $this->view('templates/header', $data);
        $this->view('detail', $data);
        $this->view('templates/footer');
    }

    // Tampilkan form tambah user
    public function create()
    {
        $data['judul'] = 'Tambah User';
        $this->view('templates/header', $data);
        $this->view('user/create', $data);
        $this->view('templates/footer');
    }

    // Proses simpan user baru (POST)
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $this->model('User_model')->createUser(['name' => $name, 'email' => $email]);
        }
        header('Location: ' . BASEURL . 'user');
        exit;
    }

    // Tampilkan form edit
    public function edit($id = null)
    {
        $data['judul'] = 'Edit User';
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('user/edit', $data);
        $this->view('templates/footer');
    }

    // Proses update user (POST)
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            if ($id) {
                $this->model('User_model')->updateUser($id, ['name' => $name, 'email' => $email]);
            }
        }
        header('Location: ' . BASEURL . 'user');
        exit;
    }

    // Hapus user berdasarkan id
    public function delete($id = null)
    {
        if ($id) {
            $this->model('User_model')->deleteUser($id);
        }
        header('Location: ' . BASEURL . 'user');
        exit;
    }
}