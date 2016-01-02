<div class="row">
    <!--////// MAIN BODY  //////-->
    <div class="result">
        <?php if(isset($result)) { ?>
            <div class="success"><?=$message ?></div>
        <?php } ?>
        <div id="selectdb">
            <h5 id="selection"><?=$dbname ?></h5>
        </div>
        <div class="mainoption">
           <i id="modifier" class="small material-icons">settings</i>
            <p> Modifier </p>
        </div>
        <div class="mainoption">
            <a href=<?php echo "index.php?action=dbstats&db-name=".$dbname;?> class="optionbtn"><i id="stats" class="small material-icons">assessment</i>
            <p> Statistiques </p></a>
        </div>
        <div class="mainoption">
            <i id="supprimer" class="small material-icons">warning</i>
            <p> Supprimer </p>
        </div>
    </div>
</div>