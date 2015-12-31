<?php
require('config.php');
/*
$reponse = $db->query('SELECT * FROM news');

while ($donnees = $reponse->fetch())
{
	echo $donnees['titres'];
	echo $donnees['contenu'];
}

$reponse -> closeCursor();
*/

function add_db($db)
{
	if (isset($_POST["dbname"]) == TRUE)
	{
		$dbname = $_POST["dbname"];
		if ($db->query("CREATE DATABASE IF NOT EXISTS `$dbname`"))
			echo "Base de donnée ".$dbname." crée";
		else
			echo "Erreur création base de donnée : ".$dbname." existe déjà.";
	}
	else
		echo "Veuillez entrer un nom pour la base de données";
}

function erase_db($db)
{
	
}
?>
      <!--  <div class="container">
        	<form action="bddadmin.php" method="post">
					DB name: <input type="text" name="dbname">
					<input type="submit">
			</form>
		</div>-->