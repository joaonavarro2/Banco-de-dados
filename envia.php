<?php 
	include_once('config/conection.php');


	$stmt =$connect->prepare("INSERT INTO jj (name,email,senha) VALUES (:NAME, :EMAIL, :PASS)");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$stmt->bindParam(":NAME",$name);
	$stmt->bindParam(":EMAIL",$email);
	$stmt->bindParam(":PASS",$pass);

	$stmt->execute();

	header("Location: index.php")



 ?>