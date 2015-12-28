<?php
require('config.php');
$db = Database::getConnection();

/* afficher les databases en <li> dans la sidenavbar*/
function display_db($db)
{
	if ($db)
	{
		$result = $db->query('SHOW DATABASES');
		$aff = $result->fetchAll();
		foreach ($aff as $value)
		{
			?><li>
			<a onclick="displaySelection('<?php echo "$value[0]";?>');" class="collapsible-header waves-effect waves-blue darken-1"><?php echo $value[0];?></a>
			<div class="collapsible-body">
				<ul>
					<?php display_table($db, $value[0]);?>
				</ul>
			</div></li>
			 <?php
		}
	}
}

function display_table($db, $dbname)
{
	$result = $db->query("SHOW TABLES FROM `".$dbname."`");
	$aff = $result->fetchAll();
	if (isset($aff))
	{
		foreach ($aff as $value)
		{
			?> <li name=<?php echo $value[0];?>><?php echo $value[0];?></li>
			<?php
		}
	}
	else
		echo "(vide)";
}