<div class="col s5">
    <!--////// SIDE NAVBAR ///////-->
    <ul id="nav" class="side-nav fixed">
        <img id="navlogo" class="responsive-img" src="vue/shared/img/logomyphp.png">
        <ul class="collapsible collapsible-accordion">
            <li class="bold blue darken-1"><a href="index.php?action=new-bdd"><i class="tiny material-icons">library_add</i> Nouvelle base de données</a></li>
            <?php if(isset($databases))
            {
                foreach ($databases as $value)
                {
                    ?><li>
                    <a class="collapsible-header waves-effect waves-blue darken-1" href="index.php?action=db-options&db-name=<?=$value[0]?>"><?= $value[0];?></a>
                    <div class="collapsible-body">
                        <ul>
                            <?php //display_table($db, $value[0]);?>
                        </ul>
                    </div></li>
                     <?php
                }
            }
            ?>
        </ul>
    </ul>
</div>
