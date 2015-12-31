<div class="row">
    <div id="header">
        <i class="large material-icons">library_books</i>
        <h4> Bases de données </h4>
    </div>
    <!--////// MAIN BODY  //////-->
    <div id="mainbody" class="col s7">
        <?php if(isset($result)) { ?>
            <div class="success"><?=$message ?></div>
        <?php } ?>
        <div id="selectdb">
            <h5 id="selection"><?=$dbname ?></h5>
        </div>
        <div class="mainoption">
            <i id="modifier" class="large material-icons">settings</i>
            <p> Modifier </p>
        </div>
        <div class="mainoption">
            <i id="stats" class="large material-icons">assessment</i>
            <p> Statistiques </p>
        </div>
        <div class="mainoption">
            <i id="supprimer" class="large material-icons">warning</i>
            <p> Supprimer </p>
        </div>
    </div>
</div>