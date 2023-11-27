<?php

namespace models;

use core\Database;

class Genres
{
    private $table = "Genres";

	private Database $db;
	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAllGenre()
	{
		$this->db->query("SELECT * FROM " . $this->table);
		return $this->db->resultSet();
	}

}