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
    <link rel="icon" type="image/x-icon" href="../media/logos.webp">
    <link rel="apple-touch-icon" type="image/png" href="../media/logos.webp">
    <link rel="apple-touch-startup-image" type="image/webp" href="../media/logos.webp">
    <link rel="stylesheet" href="../assets/css/estilo.css" media="none" onload="if(media!='all')media='all'">
    <!--Styles Bootstrap 5.3.1 Alpha-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  </head>  
  <script type="text/javascript" src="../assets/js/bootstrap.bundle.js" async></script>
  <body class="hom h-100"> 
    <?php
      require_once 'conexion.php';
      $mi=null;

      if (isset($_POST['insertar'])) {
        $insert=$conn->prepare('INSERT INTO usuario (nombre,apellido,email,n_telefono,edad,ciudad,usuario,clave) VALUES (?,?,?,?,?,?,?,?)');
        $insert->bindParam(1,$_POST['nombre']);
        $insert->bindParam(2,$_POST['apellido']);
        $insert->bindParam(3,$_POST['email']);
        $insert->bindParam(4,$_POST['n_telefono']);
        $insert->bindParam(5,$_POST['edad']);
        $insert->bindParam(6,$_POST['ciudad']);
        $insert->bindParam(7,$_POST['usuario']);
        $clave=password_hash($_POST['clave'],PASSWORD_BCRYPT);
        $insert->bindParam(8,$clave);

        if($insert->execute()) {
          $mi='Datos registrados';
        }else{
          $mi="Datos no registrados";
        }
      }
    ?>
    <main class="form-reg w-100 m-auto">
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
      <div class="card bg-secondary text-white">
        <div class="card-header bg-dark">
          <div class="row">		  
				    <div class="col text-center">
					    <img class="mb-2" src="../media/cba.webp" alt="Logo CBA" style="height: 48px">
              <img class="mb-2" src="../media/celia.webp" alt="Logo Celia" style="height: 48px">
				  	</div>
				  </div>
          <div class="text-center">
            <h3 class="display-6 mb-0">Registrarse</h3>
					  <div class="subheading-1 mb-2"><p>EUTOPENIA<br>
          "Ciudad soñada de adultos mayores"</p></div>
				  </div>
				</div>
        <div class="card-body">
				  <form action="" method="post" enctype="application/x-www-form-urlencoded" class="form-horizontal">
					  <div class="row">
						  <div class="col">
							  <div class="mb-3 mt-3">
                  <label class="form-label" id="name-label" for="nombre">Nombres</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" required/>
							  </div>
						  </div>
            </div>
            <div class="row">
					    <div class="col">
						    <div class="mb-3 mt-3">
                  <label id="name-label" for="apellido">Apellidos</label>
                  <input type="text" name="apellido" class="form-control"  placeholder="Ingrese sus apellidos"  required/>
                </div>
					    </div>
				    </div>
            <div class="row">
				      <div class="col">
					      <div class="mb-3 mt-3">
                  <label id="email-label" for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Ingrese su Email" required/>
                </div>
					    </div>
				    </div>
            <div class="row">
				      <div class="col">
					      <div class="mb-3 mt-3">
                  <label id="email-label" for="n_telefono">Numero de telefono</label>
                  <input type="text" name="n_telefono" class="form-control" placeholder="Ingrese su numero telefonico"  onkeypress="return event.charCode >= 48
                  && event.charCode <= 57" required/>
                </div>
					    </div>
				    </div>
            <div class="row">
				      <div class="col">
					      <div class="mb-3 mt-3">
                  <label id="number-label" for="edad">Edad</label>
                  <input type="text" name="edad" min="0" max="90" class="form-control" placeholder="Ingrese su edad"  onkeypress="return event.charCode >= 48
                  && event.charCode <= 57"  required/>
                </div>
					    </div>
				    </div>
            <div class="row">
				      <div class="col">
					      <div class="mb-3 mt-3">
                  <label id="ciudad-label" for="ciudad">Ciudad</label>
                  <input type="text" name="ciudad" min="0" max="99" class="form-control" placeholder="Ingrese su ciudad" required/>
                </div>
					    </div>
				    </div>
            <div class="row">
				      <div class="col">
					      <div class="mb-3 mt-3">
                  <label id="ciudad-label" for="usuario">Crea un nombre de usuario</label>
                  <input type="text" name="usuario" min="0" max="99" class="form-control" placeholder="Ingrese su usuario"/>
                </div>
					    </div>
				    </div>
            <div class="row">
				      <div class="col">
					      <div class="mb-3 mt-3">
                  <label id="ciudad-label" for="clave">Contraseña</label>
                  <input type="password" name="clave" min="0" max="99" class="form-control" placeholder="Ingrese su contraseña" required/>
                </div>
					    </div>
				    </div>
            <div class="mx-auto w-100 text-center">
              <button class="btn btn-primary" type="submit" name="insertar">Enviar</button>
              <a href="../" class="btn btn-primary">Volver</a>
            </div>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
