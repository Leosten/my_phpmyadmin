<?php
	include("vue/options.php");
?>
<hr>
<h5 class="selection"><?php echo $_GET['table-name'];?></h5>
<div class="result">
	<a class="waves-effect waves-light btn deep-purple accent-4" href=<?php echo "index.php?action=new-colone&db-name=".$dbname."&table-name=".$tablename;?>> <i id="structure" class="tiny material-icons">settings</i> Structure</a>
	<a class="waves-effect waves-light btn deep-purple accent-4"><i id="addline" class="tiny material-icons">library_add</i> Ajouter une entrée</a>
	<?php stats_tablelength($connection, $dbname, $tablename);?>
</div>
<div class="collection result">
	<?php display_tablecontents($connection, $dbname, $tablename);?>
</div>