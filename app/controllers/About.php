<?php

namespace controllers;

use core\Controller;

class About extends Controller
{
	public function index($name = "anas", $job = "heh"): void
    {
		$data = [
            "name"=> $name,
            "job"=> $job
        ];
        $this->view("templates/header");
		$this->view("about/index", $data);
        $this->view("templates/footer");
	}

	public function page(): void
    {
        $this->view("templates/header");
		$this->view("about/page");
        $this->view("templates/footer");
	}
}