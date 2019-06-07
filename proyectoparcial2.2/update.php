<?php 
		$server="localhost";
		$username = "root";
		$pass = "";
		$db= "escuela";

		$conexion = new mysqli ($server, $username, $pass, $db);

		if($conexion->connect_error){
				die("Error en la conexión: " . $conexion->connect_error);
		}

		$id = $_POST["id"];
		$nombre = $_POST["nombre"];
		$edad = $_POST["edad"];
		$telefono = $_POST["telefono"];
		$sexo = $_POST["sexo"]; 

		$sql = "UPDATE alumnos SET nombre='$nombre', edad=$edad, telefono='$telefono', sexo=$sexo WHERE id=$id";

		if ($conexion->query($sql) === TRUE) {
   			 echo "Registro de alumno modificado <a href='consultarAlumnos.php'>Regresar</a>";
		} else {
			echo "ocurrió un error";
			echo $conexion->error;
			echo $sql;
		}
		$conexion->close();
 ?>