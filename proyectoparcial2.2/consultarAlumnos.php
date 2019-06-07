<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php 
		$server="localhost";
			$username = "root";
			$pass = "";
			$db= "escuela";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$sql = "SELECT * FROM alumnos";
			$data = $conexion->query($sql); 
			echo '<table class="table table-hover">';
			echo '<thead>';
			echo '<tr>';
			echo '<th>ID</th>';
			echo '<th>Nombre</th>';
			echo '<th>Edad</th>';
			echo '<th>Telefono</th>';
			echo '<th>Sexo</th>';
			echo '<th>Editar</th>';//Opcion para editar
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			while($obj = $data->fetch_object()){
				echo '<tr><td>'.$obj->id.'</td>';
				echo '<td>'.$obj->nombre.'</td>';
				echo '<td>'.$obj->edad.'</td>';
				echo '<td>'.$obj->telefono.'</td>';
				echo '<td>'.$obj->sexo.'</td>';
				echo '<td><a class="btn btn-xs btn-primary" href="editarAlumno.php?id='.$obj->id.'">Editar</a>  <a class="btn btn-xs btn-default" href="eliminar.php?id='.$obj->id.'">Eliminar</a></td></tr>';
			}
	 ?>
</body>
</html>











