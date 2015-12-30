<?php
require('config.php');
require('index.php');

if (isset($_POST["dbname"]))
{
add_db($db);
}
else
echo "Veuillez entrer un nom pour la base de données."
?>

<div id="createform" class="form tohide">
	<h5>Créer une nouvelle base de données</h5>
	<form action="form.php" method="post">
		<label for="dbname">Nom</label>
		<input name="dbname" type="text"></input>
		<input name ="submit" type="submit" value="Créer">
	</form>
</div>