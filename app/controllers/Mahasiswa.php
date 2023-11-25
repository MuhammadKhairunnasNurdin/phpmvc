<?php

namespace controllers;

use core\Controller;

class Mahasiswa extends Controller {
	public function index() {
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMhs();
		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}
}