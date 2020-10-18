<?php

class Database {

	private $dbHost = "localhost";
	private $dbUser = "root";
	private $dbPass = "";
	private $dbName = "users";

	protected $statement;
	protected $error;

	protected function connect() {

		$dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
		$pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $pdo;

	}

	protected function query($sql) {

		$this->statement = $this->connect()->query($sql);

	}

	protected function prepare($sql) {

		$this->statement = $this->connect()->prepare($sql);
		
	}
	

}