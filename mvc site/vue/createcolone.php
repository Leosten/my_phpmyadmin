
<div class= "result">
<table>
	<thead>
		<?php display_tablestruc($connection, $dbname, $tablename);?>
	</thead>
</table>

</div>

<div class="result">
<form action=<?php echo "index.php?action=add-colone&db-name=".$dbname."&table-name=".$tablename?> method="POST">
<h5> Créer une colonne </h5>
	<table id="table">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Type</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th><input type="text" name="nomcol" /></th>
						<th><select name="type" class="browser-default">
							<option value="INT">INT</option>
							<option value="VARCHAR">VARCHAR</option>
							<option value="TEXT">TEXT</option>
							<option value="DATE">DATE</option>
							</select>
						</th>
					</tr>
				</tbody>
	</table>
	<p><input name="submit" type="submit" value="Créer"/></p>
</form>
</div>