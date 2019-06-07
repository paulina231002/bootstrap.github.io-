

<?php 
      $server="localhost";
      $username = "root";
      $pass = "";
      $db= "ropa";

      $conexion = new mysqli ($server, $username, $pass, $db);

      if($conexion->connect_error){
          die("Error en la conexión: " . $conexion->connect_error);
      }

      $tipo = $_POST["tipo"];
      $cantidad = $_POST["cantidad"];
      $color = $_POST["color"]; 
        $medida = $_POST["medida"]; 

      $sql = "INSERT INTO ropa (tipo, cantidad, color,medida)
              VALUES ('$tipo', $cantidad, '$color','$medida')";

      if($conexion->query($sql) === TRUE){
        echo "Registro insertado <a href='registro.php'>Regresar</a>";
      } else {
        echo "Error: " .$sql. "<br>" . $conexion->error;
    

      }
 ?>


