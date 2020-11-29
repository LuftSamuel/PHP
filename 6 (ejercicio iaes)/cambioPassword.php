<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>Para poder cambiar su password, primero confirme sus datos.</h1>
	<form method="post" name="form1">	
		<div>
		<input type="text" name="inputnombre1" placeholder="nombre de usuario">
		<input type="text" name="inputpass" placeholder="password">	
		<input type="text" name="inputpass2" placeholder="nuevo password">
  		</div>
  		<div>

  			 <button type="submit">ENVIAR</button>
  		</div>
	</form>

	<?php 
		if(isset($_POST['inputnombre1'])){
			if(isset($_POST['inputpass'])){
				include("abrir_conexion.php");
				$nombre1 = $_POST['inputnombre1'];
				$password1 = $_POST['inputpass'];
				$sql = "SELECT nombre FROM registro WHERE nombre = '$nombre1' ";
				$sql2 = "SELECT password FROM registro WHERE nombre = '$nombre1' AND password = '$password1' ";

					$result = mysqli_query($conexion, $sql);
					$result2 = mysqli_query($conexion, $sql2);

					if (mysqli_num_rows($result) > 0) {
						$bandera = 1;
						
						if(mysqli_num_rows($result2) > 0){
						$bandera = 2;
						}			
					} 

					if($bandera==0){
						echo "Ese usuario no existe.";
					}else if($bandera==1){
						echo "El password es incorrecto.";
					}else{
							
							$password2 = $_POST['inputpass2'];							
							
							$sql3 = "UPDATE registro set password = '$password2' where nombre = '$nombre1' and password = '$password1' ";

							$result3 = mysqli_query($conexion, $sql3);

							if($result3 == TRUE){
							echo "Cambio de password exitoso";
							}else{
								echo "Cambio de password NO exitoso";
							}

						}
					}

					

			}
		
	 ?>

	 

</body>
</html>