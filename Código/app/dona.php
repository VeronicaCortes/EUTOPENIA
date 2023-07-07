<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EUTOPENIA</title>
    <meta name="theme-color" content="#ff2e01">
    <meta name="theme-color" content="#ff2e01">
    <meta name="MobileOptimized" content="width">
    <meta name="HandshleFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar" content="black-traslucent">
    <!--Tags SEO-->
    <meta name="author" content="EUTOPENIA">
    <meta name="description" content="Aplicativo para el asilo Carmen Londoño">
    <meta name="keyworks" content="asilo, ancianos, donaciones, eutopia, web app">
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="../media/LOGO.webp">
    <link rel="apple-touch-icon" type="image/png" href="../media/LOGO.webp">
    <link rel="apple-touch-startup-image" type="image/png" href="../media/logoeu.webp">
    <!--Styles Bootstrap 5.3.1 Alpha-->
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  </head>
<body>
    <?php
      require_once 'conexion.php';
      $mi=null;
      
      if(isset($_POST['insertar'])){
        $insert=$conn->prepare('INSERT INTO donante (documento,nombre,apellido,telefono,email) VALUES(?,?,?,?,?)');
        $insert->bindParam(1,$_POST['documento']);
        $insert->bindParam(2,$_POST['nombre']);
        $insert->bindParam(3,$_POST['apellido']);
        $insert->bindParam(4,$_POST['telefono']);
        $insert->bindParam(5,$_POST['email']);

        if($insert->execute()) {
          $mi='Datos registrados';
        }else{
          $mi="Datos no registrados";
        }
      }
    ?>
  <div class="container-fluid">
  <?php

  if ($msg!='') {
    echo '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>'.$msg.'!</strong>
    </div>';
  }
  ?>
  <!--Verificacion de resgistro-->
  <?php

  if ($mi!='') {
    echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>'.$mi.'!</strong>
    </div>';
  }
  ?>
    <div class="row">
      <div class="col-md-6">
        <!-- Imagen -->
        <img src="../media/espitual.webp" alt="Imagen" class="img-fluid">
      </div>
      <div class="col-md-6 bg-secondary text-white">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Exitoso!</strong> Sus datos han sido registrados correctamente.
      </div>
         <div class="card-header bg-dark">
          <div class="row">		  
			      <div class="col text-center">
				      <img class="mb-2" src="../media/cba.webp" alt="Logo CBA" style="width: 100px">              
              <img class="mb-2" src="../media/celia.webp" alt="Logo Celia" style="width: 100px;">
				    </div>
				  </div>
          <div class="text-center">
            <h3 class="display-6 mb-0">Realice su donación</h3>
				    <div class="subheading-1 mb-2"><p>EUTOPENIA<br>
            "Ciudad soñada de adultos mayores"</p></div>
				  </div>
			  </div>
        <!-- Formulario -->
        <form action="" method="post" enctype="application/x-www-form-urlencoded">
          <div class="mb-3">
            <label for="documento" class="form-label">Numero de Documento</label>
            <input type="text" name="documento" class="form-control" id="documento" onkeypress="return event.charCode >= 48
            && event.charCode <= 57" placeholder="Ingrese su numero de documento" required/>
          </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese su nombre" required/>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">Apellidos</label>
            <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Ingrese sus apellidos" required/>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Numero de telefono</label>
            <input type="number" name="telefono" class="form-control" id="telefono" onkeypress="return event.charCode >= 48
            && event.charCode <= 57" placeholder="Ingrese su numero de telefono" required/>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su email" required/>
          </div>
          <div class="card-footer text-center" style="height: auto; margin-top: 20px;">
            <button type="submit button" class="btn btn-primary" name="insertar" onclick="validarFormulario()">Enviar</button>
            <a href="../index.html" class="btn btn-primary">Volver</a>
            <a href="donar.php" class="btn btn-primary">Siguiente</a>
          </div>   
        </form>
      </div>
    </div>
  </div>
</body>
<script>
  function validarFormulario() {
    // Validación del formulario
    var nombre = document.forms["myForm"]["nombre"].value;
    var email = document.forms["myForm"]["email"].value;

    if (nombre === "" || email === "") {
      alert("Por favor, completa todos los campos");
    } else {
      // Redireccionar a otro formulario
      window.location.href = "donar.php";
    }
  }
</script>
</html>
