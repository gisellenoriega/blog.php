<?php
//*The require_once statement is identical to require except PHP will check if the file 
//*has already been included, and if so, not include (require) it again.

//*The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). 
//*This directory name does not have a trailing slash unless it is the root directory.
require_once(__DIR__ . "/../model/config.php");


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

?>