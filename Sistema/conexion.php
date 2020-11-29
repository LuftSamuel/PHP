<?php 

$host = "localhost";
$db = "php-l.samuel";
$user = "root";
$pass = "";

$tabla1 = "admin";
$tabla2 = "producto";

error_reporting(1);

$conexion = new mysqli($host,$user,$pass,$db);

if($conexion->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

 ?>