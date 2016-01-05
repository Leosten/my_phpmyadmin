<div class="form">
        <div class="collection result">
            <h5> Supprimer la base de données</h5>
            <?php 
            $dbname = $_GET['db-name'];
            if (isset($message)){ ?>
                <div class="error">hu<?=$message ?></div>
            <?php } ?>
            <form action="index.php?action=removed-db&db-name=<?php echo $dbname ?>"  method="post">
                <label for="dbname">Voulez-vous supprimer cette base de donnée : <?php echo $dbname ?></label>
                <input name ="submit" type="submit" value="Supprimer">
            </form>
    </div>
</div>
