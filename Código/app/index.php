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
    <link rel="apple-touch-icon" type="image/png" href="../media/logoeu.jpg">
    <link rel="apple-touch-startup-image" type="image/png" href="../media/logoeu.jpg">
    <!--Styles Bootstrap 5.3.1 Alpha-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="../assets/css/estilo.css" media="none" onload="if(media!='all')media='all'">
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js" async></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  </head>
  <body class="py-5 hom">
  <?php
    require_once 'conexion.php';
    session_start();

    if (isset($_POST['validar'])) {
      $result=$conn->prepare('SELECT * FROM administrador WHERE usuario=?');
      $result->bindParam(1,$_POST['usuario']);
      $result->execute();

      $data=$result->fetch(PDO::FETCH_ASSOC);
      if (is_array($data)) {
        //Verificaremos si es la contraseña correcta
        if (password_verify($_POST['clave'], $data['clave'])) {
          $_SESSION['administrador'] = $data['idadministrador'];
          header('location: homeadm.php');
        }else{
          echo "Contraseña incorrecta";
        }
      }else{
        echo "Usuario Incorrecto";
      }
    }
  ?>
    <main class="py-2 form-signin w-100 m-auto">
      <div class="card bg-dark text-white">
        <div class="card-header">
          <div class="row">		  
				    <div class="col text-center">
					    <img class="mb-2" src="../media/cba.webp" alt="Logo CBA" style="height: 100px">
              <img class="mb-2" src="../media/celia.webp" alt="Logo Celia" style="height: 100px">
				  	</div>
				  </div>
          <div class="text-center">
            <h3 class="display-6 mb-0">Iniciar Sesión</h3>
					  <div class="subheading-1 mb-2"><p>EUTOPENIA<br>
          "Ciudad soñada de adultos mayores"</p></div>
				  </div>
        </div>
        <div class="card-body bg-secondary text-white">
          <form action=""  method="post" enctype="application/x-www-form-urlencoded">
					  <div class="mb-3 mt-3">
              <label class="form-label" for="usuario">Usuario</label>
              <input type="text" name="usuario" class="form-control" placeholder="Ingrese su usuario" id="usuario" required/>
						</div>
					  <div class="mb-3">
              <label class="form-label" for="clave">Contraseña</label>
              <input type="password" class="form-control" name="clave" id="clave" required>
						</div>
            <div class="text-center">
              <a href="form.php" class="btn btn-sm btn-warning" style="margin-bottom: 10px;">No tienes usuario?</a>
            </div>
            <div class="mx-auto w-100 text-center">
              <button type="submit" class="btn btn-primary" name="validar">Iniciar sesión</button>  
              <a href="../index.html" class="btn btn-primary">Volver</a>
            </div>       
          </form>
        </div>
      </div>
    </main>
  </body>
</html>