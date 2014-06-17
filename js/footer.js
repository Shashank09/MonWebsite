$(document).ready(function() {

	$('.menuItem:first-child').css({'background-color': '#54C4B8','color': '#304860 '})

	$('.menuItem').click(function() {

		$(this).css({'background-color': '#54C4B8','color': '#304860 '});

		$('.menuItem').not(this).css({'color': '#54C4B8 ','background':'transparent'});			

	}) ; 

})