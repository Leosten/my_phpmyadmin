$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

$('.collapsible-header').click(function() {
                $('#maindb').toggle(500);
                $('.tohide').toggle(500);
                $('.result').toggle(500);
            })
  });

function displaySelection(name)
{
	tochange = document.getElementById("selection");
	tochange.innerHTML = name;
}

function getDbName()
{
	dbname = getElementById("selection").innerHTML;
	return (dbname);
}