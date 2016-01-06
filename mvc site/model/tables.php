<?php 

function display_db($db)
{
	if ($db)
	{
		$result = $db->query('SHOW DATABASES');
		$aff = $result->fetchAll();
		foreach ($aff as $value)
		{
			?><li>
			<a class="collapsible-header waves-effect waves-blue darken-1"><?php echo $value[0];?></a>
			<div class="collapsible-body">
				<ul>
					<li><a href=<?php echo "index.php?action=new-table&db-name=".$value[0]?>><i class="tiny material-icons">library_add</i> Modifier ...</a></li>
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
			foreach ($aff as $content)
			{
				?><li class="lientable"><a href=<?php echo "index.php?action=tablecontents&db-name=".$dbname."&table-name=".$content[0]?>><?php echo $content[0];?></a></li><?php
			}
		}
		else
			echo "(vide)";
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

function display_tablestruc($db, $dbname, $tablename)
{
	$i = 0;
	$result = $db->query("DESCRIBE ".$dbname.".".$tablename);
	foreach ($result as $value)
		echo "<th>".$value[0]."</th>";
}

function display_inputadd($db, $dbname, $tablename)
{
	$coltitle = $db->query("DESCRIBE ".$dbname.".".$tablename);
	$colaff = $coltitle->fetch();
	$count = count($coltitle);
	?><span><?php
	foreach ($coltitle as $value)
	{
		echo $value[0].": <input type=text name=".$value[0].">";
	}
	?></span><?php
}?>