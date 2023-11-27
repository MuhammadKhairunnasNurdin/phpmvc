<?php

namespace models;

use core\Database;

class Mahasiswa
{
    private string $table = "mahasiswa";
    private Database $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE No_Mhs=:No_Mhs");
        $this->db->bind("No_Mhs", $id);
        return $this->db->single();
    }
}