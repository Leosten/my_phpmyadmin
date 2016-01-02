    <!--////// MAIN BODY  //////-->
    <div class="form">
        <div class="collection result">
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
