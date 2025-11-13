<?php

/**
 * Model User
 * Menangani semua operasi database yang berkaitan dengan tabel users
 */
class User_model {
    private $table = 'users';
    private $db;

    public function __construct() {
        $this->db = new Database(); // Mengasumsikan ada class Database yang sudah didefinisikan
    }

    /**
     * Mengambil semua data pengguna dari database
     */
    public function getAllUsers() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    /**
     * Mengambil data pengguna berdasarkan ID
     * $id - ID pengguna yang ingin diambil
     */
    public function getUserById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    /**
     * Menambahkan user baru
     * $data - array dengan kunci 'name' dan 'email'
     */
    public function createUser($data)
    {
        $this->db->query('INSERT INTO ' . $this->table . ' (name, email) VALUES (:name, :email)');
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    /**
     * Memperbarui data user berdasarkan id
     * $id - id user, $data - array dengan kunci 'name' dan 'email'
     */
    public function updateUser($id, $data)
    {
        $this->db->query('UPDATE ' . $this->table . ' SET name = :name, email = :email WHERE id = :id');
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    /**
     * Menghapus user berdasarkan id
     */
    public function deleteUser($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>