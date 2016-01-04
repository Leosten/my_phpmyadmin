<?php
	function add_table($connection, $table, $dbname)
	{
		return $connection->query("CREATE TABLE IF NOT EXISTS`$dbname`.`$table`(
			id INT PRIMARY KEY NOT NULL,
			titre VARCHAR(100),
			contenu VARCHAR(100)
		)");
	}	
?>