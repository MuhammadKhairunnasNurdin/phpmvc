<?php

namespace controllers;

use core\Controller;

class Genres extends Controller
{
	public function index(): void
	{
		$data = [
			"title" => "list Genre",
			"genre" => $this->model("Genres")->getAllGenre()
		];
		$this->view("templates/header", $data);
		$this->view("genre/index", $data);
		$this->view("templates/footer");
	}
}