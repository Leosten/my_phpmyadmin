<div class="row">
    <div id="header">
        <i class="large material-icons">library_books</i>
        <h4> Bases de données </h4>
    </div>
    <!--////// MAIN BODY  //////-->
    <div id="mainbody" class="col s7">
        <div id="createform" class="form tohide">
            <h5>Créer une nouvelle base de données</h5>
            <?php if (isset($message)){ ?>
                <div class="error">hu<?=$message ?></div>
            <?php } ?>
            <form action="index.php?action=add-db" method="post">
                <label for="dbname">Nom</label>
                <input name="dbname" type="text"></input>
                <input name ="submit" type="submit" value="Créer">
            </form>
        </div>
    </div>
</div>