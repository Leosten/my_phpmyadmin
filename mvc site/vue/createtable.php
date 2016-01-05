<div class="result collection">
	<h5> Créer une nouvelle table dans: <?= $dbname?></h5>
<form action=<?php echo "index.php?action=add-table&db-name=".$dbname?> method="POST">
	<p>
		<label>Nom de la table : <input type="text" name="table" /></label>
	</p>
	<p><input name="submit" type="submit" value="ajouter"/></p>
</form>
</div>
