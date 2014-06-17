			$(document).ready(function() {

				var dHeader = $(".duplicateHeader") ; 
			
				var hWrapper = $(".headerWrapper") ; 
	
				var nBar = $(".navBar") ; 
		
				var l = $(".logo") ; 
		
				var nButtons = $(".navButtons") ; 
	
				$(window).scroll(function() {
	
					var offset = 150 ; 
		
					var scroll = $(window).scrollTop() ;
					if(scroll > offset) {
		
						$(".header").addClass("smallHeader") ; 
		
					} 
		
					else {
		
						$(".smallHeader").removeClass('smallHeader') ; 
		
					}
		
				}) ;

			});