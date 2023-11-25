<?php

namespace controllers;

use core\Controller;

class Home extends Controller
{

	/*this default method if we are not requested
	method explicitly*/
	public function index()
	{
		$this->view("home/index");
	}
}