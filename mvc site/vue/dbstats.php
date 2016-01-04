<div id="selectdb">
	<h5 class="selection"><?=$dbname ?></h5>
</div>
<div class="collection result">
	<?php stats_dbtables($connection, $dbname);?>
	<br />
	<br />
	<?php stats_dbdate($connection, $dbname);?>
	<br />
	<?php stats_dbmemory($connection, $dbname);?>
</div>