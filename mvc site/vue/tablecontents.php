<?php
	include("vue/options.php");
?>
<hr>
<div id="selecttable">
<h5><?php echo $_GET['table-name'];?></h5>
</div>
<div class="collection result">
	    <?php
			display_tablecontents($connection, $dbname, $tablename);
		?>
	</div>
</div>