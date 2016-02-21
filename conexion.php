<?php 
require_once( "config.php" );

function conexionMysql() {
	//echo "Hola porfavor no usen ecos para imprimir en pantalla";

	$conexion = new mysqli(SERVER, USER, PASS, BD);

	if ( $conexion->connect_error ) {

		$err = "<div class='error'>Error de conexion N°<b>%d</b> Mensaje del error: <mark>%s</mark></div>";
		printf($err, $conexion->connect_errno, $conexion->connect_error);
		//die( $err );
	}
	else {
		//$formato = "<div class='mensaje'>Conexion exitosa: <b>%s</b></div>";
		//printf($formato, $conexion->host_info);	
	}
	//$conexion->query( "SET CHARACTER SET UTF8" );
	return $conexion;
}

//conexionMysql();