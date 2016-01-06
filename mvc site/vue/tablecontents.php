<h5 class="selection"><?php echo $_GET['table-name'];?></h5>
<div class="result tablebtn">
	<a class="waves-effect waves-light btn deep-purple accent-4" href=<?php echo "index.php?action=new-colone&db-name=".$dbname."&table-name=".$tablename;?>> <i id="structure" class="tiny material-icons">settings</i> Structure</a>
	<a class="waves-effect waves-light btn deep-purple accent-4" href=<?php echo "index.php?action=add-line&db-name=".$dbname."&table-name=".$tablename;?>><i id="addline" class="tiny material-icons">library_add</i> Ajouter une entrée</a>
	<a class="waves-effect waves-light btn deep-purple accent-4" href=<?php echo "index.php?action=erase-table&db-name=".$dbname."&table-name=".$tablename;?>><i id="addline" class="tiny material-icons">warning</i> Supprimer la table</a>
</div>
<div class="result">
	<?php stats_tablelength($connection, $dbname, $tablename);?>
</div>
<div class="collection result">
	<?php display_tablecontents($connection, $dbname, $tablename);?>
</div>