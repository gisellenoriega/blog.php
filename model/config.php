<?php

require_once(__DIR__ . "/database.php")
	$path = "/blog/";

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

// $connection creates an instance
	$connection = new Database($host, $username, $password, $database);