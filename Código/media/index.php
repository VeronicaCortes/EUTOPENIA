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
    <link rel="icon" type="image/x-icon" href="media/LOGO.webp">
    <link rel="apple-touch-icon" type="image/png" href="media/LOGO.webp">
    <link rel="apple-touch-startup-image" type="image/png" href="media/LOGO.webp">
    <!--Styles Bootstrap 5.3.1 Alpha-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<style>
  .home{
    background-image: url(media/ASILOE.webp);
    background-size: cover;
    height:600px;
    padding-top: 200px;
  }
</style>
<body class="h-100">
    <?php
    /* comentario */
    #comenterio
    require_once 'conexion.php';
    session_start();

    if (isset($_POST['validar'])) {
        $result=$conn->prepare('SELECT * FROM administrador WHERE usuario=?');
        $result->bindParam(1,$_POST['usuario']);
        $resul->execute();
    }else{
        echo "Usuario Incorrecto"
    }
    ?>
  <div class="d-flex flex-column">
    <header class="mb-auto" style="position: fixed;z-index: 100; width: 100%;">
      <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="rounded-pill" style="width:60px;" src="media/LOGO.webp" alt="Logo Eutopenia">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button aria-labelledby="labeldiv" alt="Menu de apartados de EUTOPENIA">
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#comunidad">Comunidad</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Eutopenia2.html">Informáte</a>
              </li>
            </ul>
            <div class="d-flex">
              <h3 class="text-white">EUTOPENIA</h3>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>
    <div class="home text-center" id="home">
      <div class="p-5 text-white rounded text-center bg-secondary" style="width: 90%;  margin: 0 auto;">
        <h1>EUTOPENIA</h1>
        <p>"Ciudad Soñada De Ancianos"</p>
        <a href="iniciosesion.html"><button class="btn btn-primary" type="button">Iniciar Sesión</button></a>
        <a href="infordona.html" class="texto"><button class="btn btn-primary" type="button">Donar</button></a>
        <a href="app/form1.php"><button class="btn btn-primary glyphicon glyphicon-info-sign" type="button">Registrarse</button></a>
      </div>
    </div>
    <main class="container-fluid pt-5 text-center">  
      <section class="" id="nosotros">
        <h2>Nosotros</h2>
        <p>
          Representamos un aplicativo que busca obtener alternativas factibles para el bienestar tanto del CBA como de todos los miembros
          que se encuentran en él, ya sea administradores o los ancianos y Brindamos mejoras en la administración de informacion
          e incremento en la visibilidad.
        </p>
        <img class="img-fluid" src="media/asilo.webp" alt="Foto del bienestar del anciano">
      </section>
      <section id="comunidad">
        <h2>Comunidad</h2>
        <p>
          Eutopenia opta por una excelente interacción entre el aplicativo, el usuario y los administradores, garantizando
          un buena adquisición de datos y una buena funcionalidad.
        </p>
        <img class="img-fluid" src="media/cede.webp" alt="Actividades de adultos mayores">
      </section>
    </main>
    <br>
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn text-white btn-floating m-1"
            aria-label="Read more about Seminole tax hike"
            style="background-color: #3b5998;"
            href="https://www.facebook.com/profile.php?id=100092489317450&mibextid=ZbWKwL"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <!-- Instagram -->
          <a
            class="btn text-white btn-floating m-1"
            aria-label="Read more about Seminole tax hike"
            style="background-color: #ac2bac;"
            href="https://instagram.com/cba_abejorral?igshid=NTc4MTIwNjQ2YQ=="
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>
          <!-- whatsapp -->
          <a class="btn text-white btn-floating m-1"
          aria-label="Read more about Seminole tax hike"
          style="background-color: #0df553;"
          href="https://api.whatsapp.com/send?phone=3117706406&text" role="button"><i class="fab fa-whatsapp"></i></a>
        </section>
        <!-- Section: Social media -->
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3 bg-dark" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">EUTOPENIA</a>
        </div>
        <!-- Copyright -->
      </div>
    </footer>
    
</body>
</html>