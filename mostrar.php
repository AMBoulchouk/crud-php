<?php

//incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro= new Libro();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros=$crud->mostrar();
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mostrar Libros</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="col">
				<h1>Registro Completo de Libros</h1>
			</div>
		</div>
		<div class="row text-center">
			<div class="col">
				Nombre
			</div>
			<div class="col">
				Autor
			</div>
			<div class="col">
				Edicion
			</div>
			<div class="col">
				Actualizar
			</div>
			<div class="col">
				Eliminar
			</div>
			
		</div>
		<?php foreach ($listaLibros as $libro) {?>
		<div class="row text-center">
			<div class="col">
				<?php echo $libro->getNombre() ?>
			</div>
			<div class="col">
				<?php echo $libro->getAutor() ?>
			</div>
			<div class="col">
				<?php echo $libro->getAnio_edicion()?>
			</div>
			<div class="col">
				<a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a>
			</div>
			<div class="col">
				<a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a>
			</div>
		</div>
		<?php }?>
		<div class="row text-center fixed-bottom">
			<div class="col"></div>
			<div class="col">
				<a href="index.php">Inicio</a>
			</div>
			<div class="col">
				<a href="ingresar.php">Ingresar</a>
			</div>
			<div class="col"></div>
		</div>
	</div>

	<style>
		h1 {
            padding: 3%;
        }
        div {
            padding: 1%;
        }
	</style>

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>