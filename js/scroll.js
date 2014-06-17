$(document).ready(function(){

	var parentHeight = $('.paraContainer').outerHeight(true) ; 

	var childHeight = $('.scrollable').outerHeight(true) ;

	var interval = setInterval(dynamicScroll,500) ; 

	function dynamicScroll() {

			$('.scroller').each(function() {

				var parH = $(this).parent().outerHeight(true) ; 

				var areaH = $(this).siblings('.scrollable').outerHeight(true) ;

				if(parH > areaH) {

					$(this).siblings('.scrollable').css('top','0px') ;

					$(this).height(0) ; 

				}

				else { 

					var scrH = parH / (areaH/parH) ; 

					$(this).height(scrH);

					$(this).mousedown(function(){

					    $(this).css('background','rgba(22, 147, 165, 0.7)') ; 

					});

					$(this).mouseup(function(){

					   	$(this).css('background','rgba(22, 147, 165, 0.6)') ; 

					});

					$('html').mouseup(function() {

					    $(this).find('.scroller').css('background','rgba(22, 147, 165, 0.5)') ; 

					});

					$(this).draggable({

					    axis: 'y',

					    containment: 'parent', 

					    drag: function() {

					        	var scrPos = $(this).position().top;  
							
								$(this).siblings('.scrollable').css({top: -(scrPos*(areaH/parH)-1)});

					    }

					});

					scrollerMade = true ; 

				}

			}) ;  

	}

})