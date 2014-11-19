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
	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

		if($this->connection->connect_error){
			die("<p>Error: " . $connection->connect_error . "</p>");
	}
	}

	public function closeConnection() {
		if(isset($this->connection)) {
			$this->connection->close();
		}
	}

	public function query($string)
	$this->openConnection();

	$query = $this->connection->query($string);

	$this->closeConnection();

	return $query;

}
// use a class instead of many functions because the code would look neater and to make new objects.
// __construct() - the method name for the constructor. The constructor is called on an object after its been created, its a good place to put initialisation code!!
// A function is a name we give to a block of code that can be executed whenever we need it.
// It determines if a variable is set and is not NULL.
