<?php

    function add_database($connection, $dbname)
    {
        return $connection->query("CREATE DATABASE IF NOT EXISTS `$dbname`");
    }

    function getDatabases($connection)
    {
        if ($connection)
        {
            $result = $connection->query('SHOW DATABASES');
            return $result->fetchAll();
        }
    }
?>