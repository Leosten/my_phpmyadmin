<div class="result">
<h5>Ajouter une entrée dans: <?=$dbname?></h5>
<table>
	<thead>
		<?php display_tablestruc($connection, $dbname, $tablename);?>
	</thead>
</table>

<?php display_inputadd($connection, $dbname, $tablename);?>

<!--<form action=<?php echo "index.php?action=add-data&db-name=".$dbname."&table-name=".$tablename?> method="POST">
	<table id="table">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Type</th>
						<th>Taille/valeur</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th><input type="text" name="key" /></th>
						<th><input type="text" name="title" /></th>
						<th><input type="text" name="cont" /></th>
					</tr>
				</tbody>
	</table>
	<p><input name="submit" type="submit" value="Créer"/></p>
</form>-->
</div>