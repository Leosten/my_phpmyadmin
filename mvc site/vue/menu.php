<div id="header">
        <i class="large material-icons">library_books</i>
        <h4> Bases de données </h4>
</div>
<div class="col s5">
    <!--////// SIDE NAVBAR ///////-->
    <ul id="nav" class="side-nav fixed">
        <a id="navlogo" href="index.php"><img class="responsive-img" src="vue/shared/img/logomyphp.png"></a>
        <ul class="collapsible collapsible-accordion">
            <li class="bold blue darken-1"><a href="index.php?action=new-bdd"><i class="tiny material-icons">library_add</i> Nouvelle base de données</a></li>
            <?php
            if(isset($connection))
                {
                    display_db($connection);
                }
            ?>
        </ul>
    </ul>
</div>
