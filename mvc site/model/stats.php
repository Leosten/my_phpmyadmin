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
				echo  "<span>".$dbname." contient <h5>".$i."</h5> tables.</span>";
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
		echo "<span>Date de création: ";
		echo "<h5>$aff[0]</h5></span>";
	}
}

function stats_dbmemory($db, $dbname)
{
	$result = $db->query("SELECT (data_length+index_length)/power(1024,1) tablesize_kb FROM information_schema.tables WHERE table_schema='".$dbname."'");
	$aff = $result->fetch();
	echo "<span>Taille: <h5>" .$aff[0]. " Ko.</h5></span>";
}

function stats_tablelength($db, $dbname, $tablename)
{
	if ($db)
	{
		$i = 0;
		$tablelength = 0;
		$coltitle = $db->query("SHOW COLUMNS FROM ".$dbname.".".$tablename);
		$title = $coltitle->fetchAll();
		$count = count($title);
		$result = $db->query("SELECT * FROM ".$dbname.".".$tablename);
		$aff = $result->fetchAll();
			foreach ($aff as $value)
			{
				$tablelength++;
			}
	}
	echo "<p>".$tablelength." lignes</p>";
}