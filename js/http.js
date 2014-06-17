var xmlhttp = newXMLHttpRequest() ;  

function newXMLHttpRequest() { 

	var xmlhttp ; 

	if(window.XMLHttpRequest) { 
		xmlhttp = new XMLHttpRequest()  ; 
	}

	else { 
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP") ; 
	} 

} 