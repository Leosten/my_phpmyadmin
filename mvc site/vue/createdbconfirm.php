<div class="result collection">
<?php
if ($dbname = $_POST['dbname'])
{
    if (isset($_GET['confirm']))
        {
            if (add_database($connection, $dbname))
                {
                    echo "<h5>La base ".$dbname." a bien été créée</h5>";
                    echo "<p> Redirection ... </p>"
                    ?>
                <meta http-equiv="refresh" content="2; url=index.php"/>
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
                echo "<h5>La base de données existe déjà!</h5>";
                echo "<p>Redirection ... </p>"
                ?>
                <meta http-equiv="refresh" content="2; url=index.php?action=new-bdd"/>
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
   }
}
else
{
echo "<h5>Veuillez entrer un nom pour la base de données!</h5>";
                echo "<p>Redirection ... </p>"
                ?>
                <meta http-equiv="refresh" content="2; url=index.php?action=new-bdd"/>
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
?>
</div>