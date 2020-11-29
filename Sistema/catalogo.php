<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Catalogo | CactusINC</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css1.css">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>	
	<div class="col-md-3 d-block mx-auto quitar-float text-center">
		<nav>
			<a class="espacio-derecha" href="index.html">Inicio</a>
			<a class="espacio-derecha" href="catalogo.php">Catalogo</a>
			<a href="contacto.html">Contacto</a>
		</nav>		
	</div>	
	<div class="container text-center">
		<h1 class="pacifico grande verde-planta">Plantas en venta</h1>
		<p>Algunas de las plantas que tenemos en stock</p>
	</div>

	<!-- <section>
		<div class="container text-center">
			<h1 class="pacifico grande verde-planta">Titulo</h1>
			<p>Profesionales con un chillion de años de experiencia</p>
			<div class="row row-cols-3">
			    <div class="col-md-3">
			    	<article>
			    		<h2 class="pacifico">nombre</h2>
			    		<img class="col-md-8" src="img/images.jpg">
			    		<p>Descripcion</p>
			    	</article>
			    	<article>
			    		<h2 class="pacifico">nombre</h2>
			    		<img class="col-md-8" src="img/images.jpg">
			    		<p>Descripcion</p>
			    	</article>
			    </div>
			    <div class="col-md-6">
			    	<article>
			    		<h2 class="pacifico">nombre</h2>
			    		<img class="col-md-8" src="img/images.jpg">
			    		<p>Descripcion</p>
			    	</article>
			    </div>
			    <div class="col-md-3">
			    	<article>
			    		<h2 class="pacifico">nombre</h2>
			    		<img class="col-md-8" src="img/images.jpg">
			    		<p>Descripcion</p>
			    	</article>
			    	<article>
			    		<h2 class="pacifico">nombre</h2>
			    		<img class="col-md-8" src="img/images.jpg">
			    		<p>Descripcion</p>
			    	</article>
			    </div>
			</div>
		</div>
	</section> -->

	

<?php 

include('conexion.php');
$query = "SELECT * FROM producto";
$resultado = $conexion->query($query);

?>

<div class="row">

<?php 
while($row = $resultado->fetch_assoc()){	

?>

		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="text-center"><?php print $row['nombre'] ?></h3>
					<img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
					<p class="text-center"><?php print $row['descripcion'] ?></p>
					<h5 class="text-center"><?php print $row['precio'] ?></h5>
				</div>
			</div>			
		</div>


<?php 


}



?>

</div>


</body>
</html>










<!-- copia por si las moscas
<?php 

/*include("conexion.php");
$query = "SELECT * FROM producto";
$resultado = $conexion->query($query);

while($row = $resultado->fetch_assoc()){
	echo $row['id'];*/

?>


<img src="data:image/jpg;base64, <?php //echo base64_encode($row['imagen']); ?>">

<?php
/*}*/
?>
-->