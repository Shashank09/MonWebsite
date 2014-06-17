$(document).ready(function(){

    $('.divider').each(function() {
    
        $(this).append('<li class="d1 dividerCircle"></li><li class="d2 dividerCircle"></li><li class="d3 dividerCircle"></li>') ; 
                       
    }) ; 

    $('.scrollable p').each(function(){

    	$(this).addClass('ic') ; 

    }); 

})