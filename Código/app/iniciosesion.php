<!DOCTYPE html>
<html lang="es-CO" class="h-100">
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
    <link rel="apple-touch-icon" type="image/png" href="../media/logoeu.webp">
    <link rel="apple-touch-startup-image" type="image/png" href="../media/logoeu.webp">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <!--Styles Bootstrap 5.3.1 Alpha-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
  <body class="hom">
      <?php
        require_once 'conexion.php';

        if(isset($_POST['insertar'])){
          $insert=$conn->prepare('INSERT INTO administrador (usuario,clave) VALUES(?,?)');
          $insert->bindParam(1,$_POST['usuario']);
          $insert->bindParam(2,$_POST['clave']);
       
          if($insert->execute()) {
            echo 'Datos registrados';
          }else{
            echo 'Datos no registrados';
          }
        }
       ?>
    <main class="form-reg w-100 m-auto d-flex justify-content-center">
      <div class="card bg-secondary w-75">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Exitoso!</strong> Datos registrados
      </div>
        <div class="card-header text-center text-white">
          <h3>Registro administradores</h3>
          <p>EUTOPENIA<br>
          "Ciudad soñada de la senectud"</p>
        </div>
        <div class="card-body bg-secondary text-white">
          <form action=""  method="post" enctype="application/x-www-form-urlencoded">
            <div class="row">
						  <div class="col">
							  <div class="mb-3 mt-3">
                  <label class="form-label" for="usuario">Usuario</label>
                  <input type="text" name="usuario" class="form-control"  placeholder="Ingrese su usuario"  required/>
							  </div>
						  </div>
            </div>
            <div class="row">
						  <div class="col">
							  <div class="mb-3 mt-3">
                  <label class="form-label" for="clave">Crea una Contraseña</label>
                  <input type="password" name="clave" id="clave" class="form-control" required/>
							  </div>
						  </div>
            </div>
            <div class="text-center">
              <a class="text-light" href="form.php">¿No tienes Usuario?</a>
            </div>
            <div class="mx-auto w-100 text-center">
              <button type="submit" class="btn btn-primary" name="insertar">Registrar</button>  
              <a href="../index.html" class="btn btn-primary">Volver</a>
            </div>       
          </form>
        </div>
      </div>
    </main> 
  </body>
  <script></script>
</html>
