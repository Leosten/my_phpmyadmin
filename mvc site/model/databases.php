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

function remove_table($db, $dbname, $tablename)
{
    return $db->query("DROP TABLE ".$dbname.".".$tablename);
}

function remove_db($db, $dbname)
{
    return $db->query("DROP DATABASE " .$dbname);
}

function welcome()
{
    if (isset($_GET["db-name"]))
    {
        ?><a href="#!" class="breadcrumb"><?php echo $_GET["db-name"]; ?></a><?php
        if (isset($_GET["table-name"]))
            {
                ?><a href="#!" class="breadcrumb"><?php echo $_GET["table-name"]; ?></a><?php
            }
    }
    else
        echo "<a href=\"index.php\" class=\"breadcrumb\">Bienvenue sur My_phpMyAdmin!</a>";
}?>