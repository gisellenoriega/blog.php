<?php
//*The require_once statement is identical to require except PHP will check if the file 
//*has already been included, and if so, not include (require) it again.

//*The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). 
//*This directory name does not have a trailing slash unless it is the root directory.
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	if($connection->connect_error){
		die("Error: " . $connection->connect_error);
	}

		$exists = $connection->select_db($database);

if(!$exists) {
	$query = $connection->query("CREATE DATABASE $database");

if ($query) {
	echo "Successfully created database: " . $database;
}
}
else {
	echo "Database already exists";
	$connection->close();
}
?>