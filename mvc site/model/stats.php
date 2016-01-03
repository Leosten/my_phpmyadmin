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

function stats_dbdate($db, $dbname)
{
	$result = $db->query("SELECT create_time FROM information_schema.tables WHERE TABLE_SCHEMA='".$dbname."'");
	$aff = $result->fetch();
	if (isset($aff))
	{
		echo "Date de création: ";
		echo "<h5>$aff[0]</h5>";
	}
}

function stats_dbmemory($db, $dbname)
{
	
}