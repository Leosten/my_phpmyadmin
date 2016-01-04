<?php
	function add_data($connection, $dbname, $tablename, $key, $title, $contenu)
	{
		return $connection->query("INSERT INTO `$dbname`.`$tablename` (id, titre, contenu) VALUES ('$key', '$title', '$contenu')");
	}	
?>