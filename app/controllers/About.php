<?php

namespace controllers;

use core\Controller;

class About extends Controller
{
	public function index($nama = 'Supri', $pekerjaan = 'Supir') {
		$data['judul'] = 'About';
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		echo "tesete";
		$this->view("about/page");
	}
}