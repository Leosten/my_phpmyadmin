<div class="result collection">
<?php
if ($nomcol = $_POST["nomcol"])
{
                $dbname = $_GET["db-name"];
                $type = $_POST["type"];
                $nomcol = $_POST["nomcol"];     
    	if ($result = add_colone($connection, $dbname, $tablename, $type, $nomcol))
    	{
    		 echo "<h5>La colonne ".$tablename." a bien été créée</h5>";
                    echo "<p> Redirection ... </p>"
                ?>
                <meta http-equiv="refresh" content="2; url=index.php?action=tablecontents&db-name=<?= $dbname?>&table-name=<?= $tablename?>"/>
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
    		echo "<h5>La colonne n'a pas pu être créée</h5>";
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
}
else
{
	$dbname = $_GET['db-name'];
    $tablename = $_GET["table-name"];
	echo "<h5>Veuillez entrer un nom pour la table!</h5>";
                echo "<p>Redirection ... </p>"
                ?>
                <meta http-equiv="refresh" content="2; url=index.php?action=new-colone&db-name=<?= $dbname?>&table-name=<?= $tablename?>"/>
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