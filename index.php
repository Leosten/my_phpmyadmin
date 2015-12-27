<html>
<head>
	<meta charset="utf-8">
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/myadmin.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->
	</head>
	<body>
		<?php
			require('config.php');
		?>
    <div class="row">
      <div class="col s5">
        <!--////// SIDE NAVBAR ///////-->
        <ul id="nav" class="side-nav fixed">
        	<img id="navlogo" class="responsive-img" src="img/logomyphp.png">
		<ul class="collapsible collapsible-accordion">
        	<li class="bold blue darken-1"><a href="#"><i class="tiny material-icons">library_add</i> Nouvelle base de données</a></li>
			<?php if(isset($db))
			{
				display_db($db);
			}
			?>
		</ul>
		</ul>
      </div>
      <div id="header">
      	<i class="large material-icons">library_books</i>
      	<h4> Bases de données </h4>
      	</div>

      	<!--////// MAIN BODY  //////-->
      <div id="mainbody" class="col s7">
        <div id="maindb">
        	<div id="selectdb">
        		<h5 id="selection">Placeholder</h5>
        	</div>
        <div class="mainoption">
        	<i id="modifier" class="large material-icons">settings</i>
        	<p> Modifier </p>
        </div>
        <div class="mainoption">
        	<i id="stats" class="large material-icons">assessment</i>
        	<p> Statistiques </p>
        </div>
        <div class="mainoption">
        	<i id="supprimer" class="large material-icons">warning</i>
        	<p> Supprimer </p>
        </div>
        	</div>
      </div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/myadmin.js"></script>

	</body>
</html>