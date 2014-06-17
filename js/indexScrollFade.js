$(document).ready(function() {
    
    var stati = [];

    $(window).scroll(function(){
    
        $('.transparent').each(function(i,el){
            
            if (stati[i] !== 'displayed') { // Makes sure that we haven't already done this item
            
                var objectBottom = $(this).position().top + $(this).height();
            
                var windowBottom = $(window).scrollTop() + $(window).height() + $('.header').outerHeight() ;
                
                /* If the object is completely visible in the window, fade it it */

                if(windowBottom > objectBottom) {
                    
                    $(this).animate({'opacity':'1'},300);

                    stati[i] = 'displayed';   
                    
                }
                
            }
            
        }); 
    
    });
    
});