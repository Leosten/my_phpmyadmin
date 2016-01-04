<?php
	function add_colone($connection, $dbname, $tablename, $type, $nomcol)
	{
		return $connection->query("ALTER TABLE `$dbname`.`$tablename` ADD `$nomcol` $type");
	}
?>