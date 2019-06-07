<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registro de ROPA</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="row well">
      <div class="col-md-6 col-md-offset-3">
        <form action="guardar.php" method="POST">
          <div class="form-group">
            <label for="tipo">tipo:</label>
            <input type="text" name="tipo" class="form-control">
          </div>
          <div class="form-group">
            <label for="">color</label>
            <input type="text" name="color" class="form-control">
          </div>
          <div class="form-group">
            <label for="cantidad">cantidad</label>
            <input type="number" name="cantidad" class="form-control">
          </div>
          <div class="form-group">
            <label for="medida">medida</label>
            <select name="medida" id="" class="form-control">
              <option value="0">chica</option>
              <option value="1">Mediana</option>
              <option value="1">grande</option>
            </select>
          </div>
          <div class="form-group text-center">
            <input type="submit" class="btn btn-primary" value="Registrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>