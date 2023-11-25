<?php

namespace core;

class Controller
{
	public function view($view, $data = []): void
	{
		require_once("../app/views/" . $view . ".php");
	}
}