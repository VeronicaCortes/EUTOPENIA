<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con imagen y campos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
      <div class="row">
         <div class="col-md-6">
        <!-- Imagen -->
        <img src="../media/espi.webp" alt="Imagen" class="img-fluid">
      </div>
      <div class="card-body bg-secondary text-white" style="width: 55%; float: right; padding: 20px;">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Exitoso!</strong> Sus datos han sido registrados correctamente.
      </div>
      <div class="card-header text-center text-white">
        <h3>Donador</h3>
        <p>EUTOPENIA<br>
        "Ciudad soñada de ancianos"</p>
      </div>
      <div class="col-md-6 bg-secondary text-white">
        <!-- Formulario -->
        <form>
          <div class="mb-3">
          <label for="documento" class="form-label">Numero de Documento</label> 
          <input type="text" name="documento" class="form-control" onkeypress="return event.charCode >= 48
          && event.charCode <= 57" placeholder="Ingrese su numero de documento" required/>
          </div>
          <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" required/>
          </div>
          <div class="mb-3">
          <label for="apellido" class="form-label">Apellidos</label>
          <input type="text" name="apellido" class="form-control" placeholder="Ingrese sus apellidos" required/>
          </div>
          <div class="mb-3">
          <label for="telefono" class="form-label">Numero de telefono</label>
          <input type="number" name="telefono" class="form-control"  onkeypress="return event.charCode >= 48
          && event.charCode <= 57" placeholder="Ingrese su numero de telefono" required/>
          </div>
          <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Ingrese su email" required/>
          <div class="card-footer text-center" style="height: auto; margin-top: 20px;">
          <a href="donar.php"><button type="submit button" class="btn btn-primary" name="insertar">Siguiente</button></a>
          <a href="../index.html"><button class="btn btn-primary" type="button">Volver</button></a>
        </div> 
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
