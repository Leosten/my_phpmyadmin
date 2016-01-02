<?php
    require_once("config.php");
    require_once("model/connection.php");
    require_once("model/databases.php");
    require_once("model/tables.php");
    require_once("model/stats.php");
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
    } 
    else 
    {
        
    }


    include("vue/shared/footer.php");
?>