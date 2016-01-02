<div id="selectdb">
	<h5 id="selection"><?=$dbname ?></h5>
</div>
<div class="collection result">
	<?php stats_dbtables($connection, $dbname);?>
</div>