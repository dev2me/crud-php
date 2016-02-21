<?php 
require_once("conexion.php");
function mostrarHeroes() {
	$mysql = conexionMysql();

	$sql = "SELECT * FROM heroes ORDER BY id_heroe DESC";
	if( $res = $mysql->query ($sql )){
		//echo "WII";
		$tabla = "<table id='tabla-heroes' class='tabla'>";
			$tabla.= "<thead>";
				$tabla.= "<tr>";
					$tabla.= "<th>Id Heróe</th>";
					$tabla.= "<th>Nombre</th>";
					$tabla.= "<th>Imagen</th>";
					$tabla.= "<th>Descripcion</th>";
					$tabla.= "<th>Editorial</th>";
					$tabla.= "<th></th>";
					$tabla.= "<th></th>";
				$tabla.= "</tr>";
			$tabla.= "</thead>";
			$tabla.= "<tbody>";
				while($fila = $res->fetch_assoc()) {
					$tabla.= "<tr>";
						$tabla.= "<td>".$fila["id_heroe"]."</td>";
						$tabla.= "<td><h2>".$fila["nombre"]."</h2></td>";
						$tabla.= "<td>".$fila["imagen"]."</td>";
						$tabla.= "<td><p>".$fila["descripcion"]."</p></td>";
						$tabla.= "<td><h3>".$fila["editorial"]."</h3></td>";
						$tabla.="<td>Boton editar</td>";
						$tabla.="<td>Boton eliminar</td>";
					$tabla.= "</tr>";
				}
			$tabla.= "</tbody>";
		$tabla .= "</table>";

		$respuesta = $tabla;
	}
	else {
		//echo "WOOO";
		$respuesta = "<div class='error'>Error: no se ejecutó la consulta a la base de datos</div>";
	}

	return printf($respuesta);
}
