<?php

class Mahasiswa_model
{

	private $conn;
	private $query;
	private $result;

	public function __construct()
	{
		// date_default_timezone_set("Asia/Jakarta");
		$this->conn = mysqli_connect('localhost', 'root', '', 'projek');

		if (mysqli_connect_errno()) {
			die("Koneksi database gagal: " . mysqli_connect_error());
		}
	}

	public function getMhs()
	{
		$this->query = "SELECT * FROM Mahasiswa";
		$this->result = mysqli_query($this->conn, $this->query);
		return mysqli_fetch_assoc($this->result);
	}
}