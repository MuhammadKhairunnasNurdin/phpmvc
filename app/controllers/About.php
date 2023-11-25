<?php

namespace controllers;

use core\Controller;

class About extends Controller
{
	public function index($name = "anas", $job = "heh")
	{
		$this->view("about/index", [$name, $job]);
	}

	public function page()
	{
		echo "tesete";
		$this->view("about/page");
	}
}