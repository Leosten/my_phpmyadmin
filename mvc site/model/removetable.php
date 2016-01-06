<div class="collection result">
    <h5> Supprimer la table</h5>
    <?php
    $dbname = $_GET['db-name'];
    $tablename = $_GET['table-name'];

    if (isset($_GET['confirm']))
        {
            if (remove_table($connection, $dbname, $tablename))
                {
                    echo "<h5>La table ".$tablename." a bien été supprimée</h5>";
                    echo "<p> Redirection ... </p>"
                ?>
                <meta http-equiv="refresh" content="2; url=index.php" />
                <div class="preloader-wrapper active">
                     <div class="spinner-layer spinner-red-only">
                        <div class="circle-clipper left">
                         <div class="circle"></div>
                </div><div class="gap-patch">
                 <div class="circle"></div>
                </div><div class="circle-clipper right">
                <div class="circle"></div>
                </div>
                </div>
                </div>
                <?php
                }
            else
                {
                   echo "<h5>la table n'a pas pu être supprimée</h5>";
                }
        }
    else
        {?>
        <p>Voulez-vous vraiment supprimer cette base de donnée : <?php echo $dbname ?> ?</p>
            <a class="waves-effect waves-light btn red darken-1" href="index.php?action=remove-table&confirm=ok&db-name=<?= $dbname?>&table-name=<?= $tablename?>"><i class="tiny material-icons">warning</i> Supprimer</a><?php
        }?>
</div>