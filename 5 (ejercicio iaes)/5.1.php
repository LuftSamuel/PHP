<!DOCTYPE html>
<html>
<head>
	
	<style>
		
			b{
				color: yellow;
  				font-family: Courier New;
				font-size: 35px;
			}

		</style>
</head>
<body>

	<?php 
	$hoy = getdate();
	$mes = $hoy['mon'];
	$dia = $hoy['mday'];
	$anio = $hoy['year'];
	$estacion;

	$verano = new DateTime("$anio-12-23");
	$otono = new DateTime("$anio-3-23");
	$invierno = new DateTime("$anio-6-23");
	$primavera = new DateTime("$anio-9-23");

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	


	switch($mes){
		case '12' : if($dia>=23){
			$estacion = 'verano';
		}else{
			echo "primavera";
		} break;
		case '1' : $estacion = 'verano'; break;
		case '2' : $estacion = 'verano'; break;
		case '3' : if($dia<23){
			$estacion = 'verano';
		}else{
			$estacion = 'otono';
		} break;
		case '4' : $estacion = 'otono'; break;
		case '5' : $estacion = 'otono'; break;
		case '6' : if($dia<23){
			$estacion = 'otono';
		}else{
			$estacion = 'invierno';
		} break;
		case '7' : $estacion = 'invierno'; break;
		case '8' : $estacion = 'invierno'; break;
		case '9' : if($dia<23){ 
			$estacion = 'invierno';
		}else{
			$estacion = 'primavera';
		} break;
		case '10' : $estacion = 'primavera'; break;
		case '11' : $estacion = 'primavera'; break;
	}

	/* $date1=date_create("$anio-$mes-$dia");
	//$date1=date_create("2013-03-15");
	$date2=date_create("2013-12-12");
	$diff=date_diff($date1,$date2);
	echo date_format($diff,"Y/m/d H:i:s"); */

	$actual = new DateTime("$anio-$mes-$dia");
	
	//$date2 = new DateTime("2020-6-23");
	//$diff = $date1->diff($date2);
	//$diff = $date1->diff($verano);
	//echo $diff->days . ' days ';

	switch($estacion){
		case 'verano' : $diff = $actual->diff($otono); 
		?> <body style="background-color:yellow"> <?php 
		break;
		case 'otono' : $diff = $actual->diff($invierno); 
		?> <body style="background-color:grey"> <?php 
		break;
		case 'invierno' : $diff = $actual->diff($primavera); 
		?> <body style="background-color:blue"> <?php 
		break;
		case 'primavera' : $diff = $actual->diff($verano); 
		?> <body style="background-color:green"> <?php 
		break;
	}

	?> <b> <?php 

	if(!isset($_POST['nombre']) || strlen(trim($_POST['nombre'])) == 0){
    die('El campo nombre esta vacio');
	}
		else if(!isset($_POST['apellido']) || strlen(trim($_POST['apellido'])) == 0){
	    die('El campo apellido esta vacio');
	    }
		    else{
		    	echo "Hola $nombre $apellido, estamos en $estacion, faltan: ";
			echo $diff->days . ' dias ';
			echo "para la proxima estacion.";
		    };

	
	


	//echo '<img src="descarga.jpg"';
	//<body style="background-color:white">;
	//<body background="fondo.gif">

	 ?>	</b>

	



</body>
</html>