<?php 


	function sanitize($string) {

		return htmlspecialchars(mysql_real_escape_string($string)) ; 

	}

	function connect() {

		$username = "root" ; 
		$password = "" ; 
		$server = "localhost" ;

		mysql_connect($server,$username,$password) ; 		

	}

	function getData($q) {

		$query = $q ; 

		$SQLquery = mysql_query($query) ; 

		return mysql_fetch_array($SQLquery) ; 

	}

	function getDatum($q) {

		$query = $q ; 

		$SQLquery = mysql_query($query) ; 

		return mysql_fetch_array($SQLquery) ; 

	}

    function sendData($q) {
        
        $query = mysql_query($q) ; 
        
        if($query) {
        
            return true ; 
            
        }
        
        else {
        
            return 'Error'. mysql_error() ; 
        
        }
    
    }



    function strToArr($string) {

    	return str_split($string) ; 

    }

    function replaceChars($string) {

    	$arr = strToArr($string) ; 

    	foreach ($arr as $key => $letter) {

    		$specialChars = array(":",";",'-','@',"'",'"','$','#','^','*','(',')','%','+','/',"|",'~','=','}','{','}','[','`') ; 
    		
    		if(in_array($letter, $specialChars)) {

    			$arr[$key] = '<span class="os">'.$letter.'</span>' ; 

    		}

    	}

    	return implode('',$arr) ; 

    }