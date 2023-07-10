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
<body class="hom h-100">
<?php
    require_once 'conexion.php';
    $mi=null;

    if(isset($_POST['insertar'])){
      $insert=$conn->prepare('INSERT INTO donacion (tipo,fecha,soporte,descripcion) VALUES(?,?,?,?)');
      $insert->bindParam(1,$_POST['tipo']);
      $insert->bindParam(2,$_POST['fecha']);
      $insert->bindParam(3,$_POST['soporte']);
      $insert->bindParam(4,$_POST['descripcion']);

      if($insert->execute()) {
        /*
        echo 'Datos registrados';*/
      }else{
        echo 'Datos no registrados';
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
    <!--Verificacion de donacion-->
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
          <h3 class="display-6 mb-0">Realice su donación</h3>
				  <div class="subheading-1 mb-2"><p>EUTOPENIA<br>
        "Ciudad soñada de adultos mayores"</p></div>
				</div>
			</div>
      <div class="card-body">
			  <form action="" method="post" enctype="application/x-www-form-urlencoded" class="form-horizontal ">
				  <div class="row">
            <div class="col">
						  <div class="mb-3 mt-3">
                <label for="tipo">Tipo de donación</label>
			          <input class="control" type="text" name="tipo" placeholder="Ingrese el tipo de donación" id="tipo" required>
						  </div>
					  </div>
          </div>
          <div class="row">
				    <div class="col">
					    <div class="mb-3 mt-3">
                <label for="fecha">Fecha</label>
			          <div>
				          <input class="control" type="date" id="start" name="soporte" value="" min="2023-05-03" max="3000-12-31" aria-label="fecha">
                </div>
              </div>
					  </div>
				  </div>
          <div class="row">
				    <div class="col">
				      <div class="mb-3 mt-3">
                <label for="soporte">Soporte</label>
			          <div>
				          <input type="file" name="soporte" id="inputImagen" class="control btn btn-primary" aria-label="soporte">			
                  <script>
					          const inputImagen = document.querySelector('#inputImagen');
						        inputImagen.addEventListener('change', () => {
						        const file = inputImagen.files[0];
                    });
				          </script>
                </div>
              </div>
				    </div>
			    </div>
          <div class="row">
				    <div class="col">
				      <div class="mb-3 mt-3">
                <label class="descripcion">Descripción</label>
			          <input class="control" name="descripcion" type="text" aria-label="descripcion">
              </div>
            </div>
				  </div>
          <div div class="mx-auto w-100 text-center">
            <button class="btn btn-primary" type="submit" name="insertar">Enviar</button>
            <a href="../" class="btn btn-primary">Volver</a>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>