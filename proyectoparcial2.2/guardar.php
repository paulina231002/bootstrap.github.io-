<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "escuela";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$nombre = $_POST["nombre"];
			$edad = $_POST["edad"];
			$telefono = $_POST["telefono"];
			$sexo = $_POST["sexo"]; 

			$sql = "INSERT INTO alumnos (nombre, edad, telefono, sexo)
							VALUES ('$nombre', $edad, '$telefono', $sexo)";

			if($conexion->query($sql) === TRUE){
				echo "Registro insertado <a href='registro.php'>Regresar</a>";
			} else {
				echo "Error: " .$sql. "<br>" . $conexion->error;
			}
 ?>







