<?php 
    function getTables($connection, $name){
        $result = $db->query("SHOW TABLES FROM `".$dbname."`");
        return $result->fetchAll();
    }
?>