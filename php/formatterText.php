<?php

    function strToArr($string) {

    	return str_split($string) ; 

    }

    $string = $_GET['string'] ; 

    $arr = strToArr($string) ; 

    foreach ($arr as $key => $letter) {

    	$specialChars = array(":",";",'-','@',"'",'"','$','#','^','*','(',')','%','+','/',"|",'~','=','}','{','}','[','`') ; 
    		
    	if(in_array($letter, $specialChars)) {

    		$arr[$key] = '<span class="os">'.$letter.'</span>' ; 

    	}

    }

    return implode('',$arr) ; 

?>