<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cargar datos</title>
	<link rel="stylesheet" href="css2.css?v=<?php echo time(); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
	<section class="form-cargar">
		<h4>Cargar Productos</h4>
		<form action="cargar_datos.php" method="POST" enctype="multipart/form-data">
			<input class="control" type="text" REQUIRED name="nombre" id="nombre" placeholder="nombre"><br>
			<textarea class="control" name="descripcion" REQUIRED rows="3" placeholder="descripcion"></textarea><br>
			<label for="imagen" class="custom-file-upload">Cargar imagen
				<input class="control" type="file" REQUIRED name="imagen" id="imagen">
			</label>
			<br>
			<input class="control" type="number" REQUIRED name="precio" placeholder="precio"><br>
			<input class="control" type="password" REQUIRED name="contraseña" placeholder="contraseña"><br>
			<input class="boton" class="blanco" type="submit" name="enviar">
		</form>
	</section>
</body>
</html>

<?php 

if(isset($_POST['enviar'])){


	include("conexion.php");

	//Campos para cargar a la tabla producto
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$precio = $_POST['precio'];

	//Campo para verificar de la tabla admin
	$contraseña = $_POST['contraseña'];

	//Tengo que verificar que la contraseña coincida con el unico registro de la tabla admin
	$sql_admin = "SELECT password FROM admin WHERE password = '$contraseña'";
	$resultado1 = mysqli_query($conexion, $sql_admin);

	//Si coincide, cargo los otros campos en la tabla producto
	if(mysqli_num_rows($resultado1) > 0){
		echo "Password correcto";
		$consulta = "INSERT INTO producto (id, nombre, descripcion, imagen, precio) VALUES (NULL, '$nombre', '$descripcion', '$imagen', '$precio')";
		$resultado2 = $conexion->query($consulta);

		if($resultado2){
			echo "<br>Datos cargados con exito";
		}else{
			echo "<br>Problema al cargar los datos";
		}
	}else{
		echo "<br>Password incorrecto";
	} 
}

 ?>