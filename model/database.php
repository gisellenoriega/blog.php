<?php
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

	public function __construct($host, $username , $password, $database){
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

	}

// use a class instead of many functions because the code would look neater and to make new objects.
// function __construct automatically calls on class instantation
}