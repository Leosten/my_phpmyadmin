$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
	$('.collapsible-header').click(function() {
                $('#maindb').show(500);
    });
	$('select').material_select();
});

function displaySelection(name)
{
	tochange = document.getElementById("selection");
	tochange.innerHTML = name;
}