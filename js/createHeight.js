window.setInterval(function changeHeight() {

		container = document.getElementById('container').offsetHeight ;

		body = document.getElementById('wrapper') ; 

		footer = document.getElementById('footer') ; 

		min = 642 ; 

		max = 800 ; 

		if(container > 642 && container < 800) {

			body.style.height = container + 'px' ; 

		}

		else {

			body.style.height = container + 'px' ;

			footer.style.position = 'absolute' ; 

		} 

},500) ; 

$(document).ready(function() {

	var interval = setInterval(setHeight,500) ;

	function setHeight() {

		var container = $('.contentWrapper').outerHeight(true) ; 

		var childH = container - 78 ; 

		$('.contentWrapper .body').height(childH) ;  

	}
    
    var i1 = setInterval(setBlockWidth,500) ; 
    
    function setBlockWidth() {
     
        $('.mainCol .block').each(function(){
        
            var parentWidth = $(this).outerWidth(true) ; 
            
            var formattedPwidth = parentWidth - 155 ; //including the increment values width
        
            $(this).find('.main').width(formattedPwidth) ; 
        
        })
        
    }


}) ; 

