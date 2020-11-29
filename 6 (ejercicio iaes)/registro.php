<?php 

	 if(isset($_POST['btnenviar'])){
	 	include("abrir_conexion.php");
	 	
	 	$nombre = $_POST['inputnombre'];
		$password = $_POST['inputcontrasenia'];

		$sql = "INSERT INTO registro (nombre, password) values ('$nombre','$password')";

		if ($conexion->query($sql) === TRUE) {
		  echo "Nuevo registro creado!<br>";
		} else {
		  echo "Error: " . $sql . "<br>" . $conexion->error;
		}

		include("cerrar_conexion.php");
	 }

 ?>