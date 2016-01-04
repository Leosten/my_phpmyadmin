<div class="row">
    <!--////// MAIN BODY  //////-->
    <h5 class="selection"><?=$dbname ?></h5>
    <div class="result">
        <?php if(isset($result)) { ?>
            <div class="success"><?=$message ?></div>
        <?php } ?>
        <div class="mainoption">
            <a class="waves-effect waves-light btn deep-purple accent-4"><i id="modifier" class="small material-icons">settings</i> Modifier</a>
            <a class="waves-effect waves-light btn deep-purple accent-4" href=<?php echo "index.php?action=dbstats&db-name=".$dbname;?>><i id="stats" class="small material-icons">assessment</i> Statistiques</a>
            <a class="waves-effect waves-light btn deep-purple accent-4"><i id="supprimer" class="small material-icons">warning</i> Supprimer</a>
        </div>
    </div>
</div>