<?php 
	$host = "localhost";
	$user ="root";
	$pass = "";
	$db = "jj";

		try {
			$connect = new PDO("mysql:host=" . $host . "; dbname=" . $db,$user,$pass);
			echo "coneção";
		} catch (Exception $e) {
			echo"Errona coneção $e"; 
		}

 ?>