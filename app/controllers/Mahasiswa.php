<?php

namespace controllers;

use core\Controller;

class Mahasiswa extends Controller
{
    public function index(): void
    {
        $data = [
            "title" => "list Mahasiswa",
            "mhs" => $this->model("Mahasiswa")->getAllMahasiswa()
        ];
        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }
    public function detail($id): void
    {
        $data = [
            "title" => "Detail Mahasiswa",
            "mhs" => $this->model("Mahasiswa")->getMahasiswaById($id)
        ];
        $this->view("templates/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("templates/footer");
    }
}