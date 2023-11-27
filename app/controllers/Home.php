<?php

namespace controllers;

use core\Controller;

class Home extends Controller
{

	/*this default method if we are not requested
	method explicitly*/
	public function index()
	{
        $data["title"] = "Home";
        $this->view("templates/header", $data);
		$this->view("home/index");
		$this->view("templates/footer");
	}
}