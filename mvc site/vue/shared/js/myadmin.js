$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false
    });

	$('select').material_select();
	$(window).click(function(){
		$('#welcomemsg').show(2000);
	})

});
