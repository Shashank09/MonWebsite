$(document).ready(function() {
    
    
    $('.emailInput').attr('rows','10') ; 
    
    

	var openSubPage = function(p) {
        
		/********** PART ONE. DECLARING VARIABLES **********************/

		var pageClass = $('.' + p).attr('class') ;

		var st = pageClass.split(' ') ; 

		var firstClass = st[0] ; 
        
        var titles = {'aboutMe':'About Me | SPKP','contactMe':'Contact Me | SPKP'} ; 

		page = $('.' + firstClass) ; //page selector 

		/********** PART TWO. CHANGING THE STYLE OF A DIVISION/SUBPAGE THAT IS ABOUT TO OPEN **********************/

		page.css({'opacity':'1','zIndex':'1'}) ; 

        page.find('.content').css('width','100%') ; 

		/********** PART THREE. CHANGING THE STYLE OF A DIVISION/SUBPAGE THAT IS CURRENTLY OPEN **********************/
            
        $('.subPage')
        
        .not('.' + firstClass).css({'opacity':'0','zIndex':'-1'})

        .not('.' + firstClass).find('.content').css('width','0%') ; 
        
		/********** PART FOUR. CHANGING THE TITLE OF THE WEBPAGE **********************/
        
        $('title').text(titles[firstClass]) ; 

	}

	$('.notHome').click(function() {

		pageToOpen = $(this).attr('data-toOpen') ; 

		openSubPage(pageToOpen) ; 

	}) ; 

	$('#menuItem').click(function(){

		$('.subPage').css({'zIndex':'-1','opacity':'0'}) ; 

		$('.aboutMe .content').css('width','0%') ; 
        
        $('.contactMe .content').css('width','0%') ; 
        
        $('title').text('Spkp | My footprint on the internet') ;

	});


})

