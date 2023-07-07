<!DOCTYPE html>
<html lang="es-CO" class="h-100">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBA Carmen Londoño</title>
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
    <link rel="apple-touch-startup-image" type="image/webp" href="../media/logoeu.webp">
    <!--Styles Bootstrap 5.3.1 Alpha-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  </head>
  <body>
      <?php
    require_once 'conexion.php';
    session_start();

    if (isset($_SESSION['administrador'])) {
        $search=$conn->prepare('SELECT * FROM administrador WHERE idadministrador=?');
        $search->bindParam(1,$_SESSION['administrador']);
        $search->execute();

        $data=$search->fetch(PDO::FETCH_ASSOC);

        $user=null;

        if (count($data)>0) {
            $user=$data;
        }
    }

        if (!empty($user)) {
            
    ?>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="rounded-pill" style="width:60px;" src="../media/LOGO.webp" alt="Logo Eutopenia">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button aria-labelledby="labeldiv" alt="Menu de apartados de EUTOPENIA">
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="informacion" _ngcontent-wdr-c200="" role="button">Informacion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fotos">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adultos">Historial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donaciones tabla">Donaciones</a>
              </li>
            </ul>
            <div class="d-flex">
              <a href="logout.php"><button class="btn btn-primary" type="button">Salir</button></a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main class="w-100 text-center container" style="width: 100%;">
        BIENVENIDO
        <div class="card-body text-center expand-sm" style="width:100%; display: flex;  margin-top: 20px; margin:  0 auto;">
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>      
        </div>
        <div class="card-body text-center expand-sm" style="width:100%; display: flex;  margin-top: 20px;">
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>      
        </div>
        <div class="card-body text-center expand-sm" style="width:100%; display: flex;  margin-top: 20px;">
          <div class="card" style="width:400px;">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>      
        </div>
        <div class="card-body text-center expand-sm" style="width:100%; display: flex; margin-top: 20px;">
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>
          <div class="card" style="width:400px">
            <button class="_aadn" type="button" title="Agregar foto del perfil" id="inputImagen">
              <img class="card-img-top" src="../media/perfil.webp" alt="Cambiar foto de perfil">
            </button>
            <div class="card-body">
              <h4 class="card-title">Nombre adulto</h4>
              <p class="card-text">Edad</p>
              <a href="#" class="btn btn-primary">Ver</a>
            </div>
          </div>      
        </div>
    </main>
    <footer>
        pie de pagina
    </footer>
    <?php
    }else{
        header('location: ./');
    }
    ?>
  </body>
</html>