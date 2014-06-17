$(document).ready(function() {
    
    var stati = [];
    
    /* Every time the window is scrolled ... */

    $(window).scroll(function(){
    
        /* Check the location of each desired element */

        $('.hidden').each( function(i, el){
            
            if (stati[i] !== 'displayed') { // Makes sure that we haven't already done this item
            
                var objectBottom = $(this).position().top + $(this).height();

                var windowBottom = $(window).scrollTop() + $(window).height();
                
                /* If the object is completely visible in the window, fade it it */

                if( windowBottom > objectBottom ){
                    
                    $(this).animate({'opacity':'1','marginLeft':'0px'},400);

                    stati[i] = 'displayed';   
                
                    
                }
                
            }
            
        }); 
    
    });
    
});