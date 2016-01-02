<?php
function stats_dbtables($db, $dbname)
	{
		if (isset($dbname))
		{
			$i = 0;
			$result = $db->query("SHOW TABLES FROM `".$dbname."`");
			$aff = $result->fetchAll();
			if (isset($aff))
			{
				foreach ($aff as $content)
					{
						$i++;
					}
			echo  $dbname." contient <h5>".$i."</h5> tables.";
			}
			else
				echo $dbname. "Ne contient aucune table";
		}
}