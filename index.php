<?php require('vistas.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Super Heroes APP</title>
	<meta name="descriptcion" content="Aplicacion CRUD con una filosofia MVC desarrollada con PHP, MYSQL Y AJAX"/>
	<link rel="stylesheet" href="css/super-heroes.css"/>
</head>
<body>
	<header id="cabecera">
		<h1>Super Heroes</h1>
		<div>
			<img src="img/super-heroes.png" alt="Super Heróes"/>
			<a href="#" id="insertar">Insertar</a>
		</div>
	</header>
	<section id="contenido">
		<!-- <p>Aqui va el contenido</p> -->

		<div id="respuesta"></div>
		<div id="precarga"></div>
		<?php mostrarHeroes(); ?>
	</section>
	<script src="js/super-heroes.js"></script>
</body>
</html>
