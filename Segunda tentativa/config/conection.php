<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "jj"; 

		try {
			$conect = new PDO("mysql:host=" . $host . "; dbname=" .$db, $user, $pass);
		} catch (Exception $e) {
			echo "Erro $e";
			
		}
 ?>