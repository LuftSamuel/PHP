<?php 
$host = "localhost";
$db = "usuarios";
$user = "root";
$pass = "";

$tabla1 = "registro";

error_reporting(1);

$conexion = new mysqli($host,$user,$pass,$db);

if($conexion->connect_error){
	die("Connection failed: " . $conn->connect_error);
}else{
	//echo "conexion exitosa<br>";
}

 ?>