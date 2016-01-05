<?php
    require_once("config.php");
    require_once("model/connection.php");
    require_once("model/databases.php");
    require_once("model/tables.php");
    require_once("model/stats.php");
    require_once("model/addtable.php");
    require_once("model/adddata.php");
    require_once("model/addcolone.php");
    require_once("fonctions.php");

    $connection = getConnection($host, $user, $pwd);
    $databases = getDatabases($connection);

    include("vue/shared/header.php");
    include("vue/menu.php");
    include("vue/breadcrumb.php");

    if (isset($_GET["action"]))
    {
        $action = $_GET["action"];
        if ($action == "new-bdd")
        {
            include("vue/form.php");
        }
        else if ($action == "db-options")
        {
            if(isset($_GET["db-name"]))
            {
                $dbname = $_GET["db-name"];
                include("vue/options.php");
            }
        }
        else if ($action == "add-db")
        {
            if (isset($_POST["dbname"]))
            {
                $dbname = $_POST["dbname"];
                $result = add_database($connection, $dbname);
                if ($result)
                {
                    $message = "La base ".$dbname." a bien été créée";
                    include("vue/options.php");
                }
                else 
                {
                    $message = "la base ".$dbname." n'a pas pu être créée";
                    include("vue/form.php");
                }
            }
        }
        else if ($action == "tablecontents")
        {
            $dbname = $_GET["db-name"];
            $tablename= $_GET["table-name"];
            include("vue/tablecontents.php");
        }
        else if ($action == "dbstats")
        {
            $dbname = $_GET['db-name'];
            include("vue/dbstats.php");
        }
        else if ($action == "new-table")
        {
            $dbname = $_GET["db-name"];
            include("vue/createtable.php");
            include("vue/formRemoveDB.php");
            include("vue/dbstats.php");
        }
        else if($action = "removed-db")
        {
            $dbname = $_GET['db-name'];
            $result = remove_db($connection, $dbname);
            if ($result)
                {
                    echo "<h5 class=selection>La base ".$dbname." a bien été supprimée</h5>";
                }
                else 
                {
                    echo "<h5 class=selection>la base ".$dbname." n'a pas pu être supprimée</h5>";
                }
        }
        else if ($action == "new-colone")
        {
            $dbname = $_GET["db-name"];
            $tablename = $_GET["table-name"];
            include("vue/createcolone.php");
        }
        else if($action == "add-colone")
        {
            if (isset($_POST["nomcol"]))
            {
                $dbname = $_GET["db-name"];
                $type = $_POST["type"];
                $nomcol = $_POST["nomcol"];
                $tablename = $_GET["table-name"];
                echo "$type";
                $result = add_colone($connection, $dbname, $tablename, $type, $nomcol);
            }
        }
        else if($action == "add-table")
        {
            if (isset($_POST["table"]))
            {
                $table = $_POST["table"];
                $dbname = $_GET["db-name"];
                $result = add_table($connection, $table, $dbname);
                if ($result)
                {
                    $message = "la table".$table."a été créée";
                }
                else
                    $message = "la table".$table."n'a pas pu être créée";
            }
        }
        else if($action == "modifier")
        {
            $dbname = $_GET["db-name"];
            $tablename = $_GET["table-name"];
            include("vue/modifier.php");
        }
        else if($action == "add-data")
        {
            $key = $_POST["key"];
            $title = $_POST["title"];
            $contenu = $_POST["cont"];
            $tablename = $_GET["table-name"];
            $dbname = $_GET["db-name"];
            $result = add_data($connection, $dbname, $tablename, $key, $title, $contenu);
        }
    }
    else
    {
        
    }


    include("vue/shared/footer.php");
?>