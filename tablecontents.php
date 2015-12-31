<?php
require('config.php');
require('index.php');
$dbname = $_GET["db"];
$tablename = $_GET["table"];
?>

<div class="form">
	<div class="collection result">
	    <?php
			
			display_tablecontents($db, $dbname, $tablename);
		?>
	</div>
</div>