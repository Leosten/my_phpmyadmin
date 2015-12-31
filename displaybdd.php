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
			?> <li class="lientable" name=<?php echo $value[0];?>><a href=<?php echo "tablecontents.php?db=".$dbname."&table=".$value[0];?>><?php echo $value[0];?></a></li>
			<?php
		}
	}
	else
		echo "(vide)";
}

function display_tabletitle($db, $dbname, $tablename)
{
	if ($db)
	{
		$i = 0;
		$result = $db->query("SHOW COLUMNS FROM ".$dbname.".".$tablename);
		$aff = $result->fetchAll();
			foreach ($aff as $col)
			{
		 		echo "<td>".$col[0]."</td>";
		 		$i++;
			}
	}
	return ($i);
		/*$aff = $result->fetchAll();
		print_r($aff);
		foreach ($aff as $entree)
		{
			print_r($entree);
			/*foreach ($entree as $value)
			?>
			<tr><?php echo $value."<br \>";?></tr>
			<?php
		}
	}*/
}

function display_tablecontents($db, $dbname, $tablename)
{
	if ($db)
	{
		$i = 0;
		$coltitle = $db->query("SHOW COLUMNS FROM ".$dbname.".".$tablename);
		$title = $coltitle->fetchAll();
		$count = count($title);
		$result = $db->query("SELECT * FROM ".$dbname.".".$tablename);
		$aff = $result->fetchAll();
		while($i < $count)
		{
			?><div class="content"><?php
			echo $title[$i][0]."<br />";
			foreach ($aff as $value)
			{
				echo $value[$i]."<br />";
			}
			?></div><?php
		$i++;
		}
	}
}

function display_all($db, $dbname, $tablename)
{
	$i = 0;
	$colcontent = $db->query("SELECT * FROM ".$dbname.".".$tablename);
	$coltitle = $db->query("SHOW COLUMNS FROM ".$dbname.".".$tablename);
	$title = $coltitle->fetchAll();
	$content = $colcontent->fetchAll();
	$max = count($title);
	echo $max;
	while($i < $max)
	{
		?><td><?php
		foreach ($title as $col)
				{
			 		?><th><?php echo $col[$i];?></th>
			 		<?php
			 		foreach ($content as $lines)
			 		{?>
			 			<td><?php echo $lines[$i]; ?></td>
			 			<?php
			 		}
				}
		?></td><?php
		$i++;
	}
}

function welcome()
{
	if (isset($_GET["db"]))
	{
		?><a href="#!" class="breadcrumb"><?php echo $_GET["db"]; ?></a><?php
		if (isset($_GET["table"]))
			{
				?><a href="#!" class="breadcrumb"><?php echo $_GET["table"]; ?></a><?php
			}
	}
	else
		echo "<a href=\"index.php\" class=\"breadcrumb\">Bienvenue sur My_phpMyAdmin!</a>";
}
