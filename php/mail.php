<?php 

	include 'C:/Program Files (x86)/wamp/www/portfolio/anon/connectSQLServer.php' ;
	
	include 'C:/Program Files (x86)/wamp/www/portfolio/anon/crypt.php' ; 

	$rawName = htmlspecialchars(mysql_real_escape_string($_POST['name'])) ; 

	$rawEmail = htmlspecialchars(mysql_real_escape_string($_POST['email'])) ; 

	$rawMessage = htmlspecialchars(mysql_real_escape_string($_POST['message'])) ; 

	$rawSubject = htmlspecialchars(mysql_real_escape_string($_POST['subject'])) ; 

	$rawIp = $_SERVER['REMOTE_ADDR'] ; 

	$name = encryption($rawName) ; 

	$email = encryption($rawEmail) ; 

	$subject = encryption($rawSubject) ; 

	$message = encryption($rawMessage) ; 

	$ip = encryption($rawIp) ; 

	$time = date("Y-m-d H:i:s") ; 

	$query = mysql_query("INSERT INTO mail(name,email,message,subject,ip,mailtime) VALUES ( '$name', '$email' , '$message' , '$subject' , '$ip' , '$time')")  ; 

	if($query) {

		echo "success" ; 

	}

	else {

		echo "fail" ; 

	}


