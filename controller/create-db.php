<?php
//*The require_once statement is identical to require except PHP will check if the file 
//*has already been included, and if so, not include (require) it again.

//*The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). 
//*This directory name does not have a trailing slash unless it is the root directory.
require_once(__DIR__ . "/../model/config.php");

	$connection = new mysqli($host, $username, $password);
	if($connection->connect_error){
		die("<p>Error: " . $connection->connect_error . "</p>");
	}

		$exists = $connection->select_db($database);

	if(!$exists) {
	$query = $connection->query("CREATE DATABASE $database");

	if ($query) {
	echo "<p>Successfully created database: " . $database . "</p>";
	}
	}
	else {
		echo "<p>Database already exists</p>";
//*enables us to run this file and only create the database ONCE.
	}

//*id int - the maximum display width for integers and it's the default value if unless the integer is UNSIGNED
//*varchar - The TEXT data types, including TINYTEXT, are non-standard.
//*a key in a relational database that is unique for each record.
$query = $connection->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");

	if($query) {
		echo "<p>successfully created table posts</p>";
	}

	else {
 		echo "<p>$connection->error</p>";

	}

	$connection->close();
?>