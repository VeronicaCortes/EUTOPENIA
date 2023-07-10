<!DOCTYPE html>
<html lang="es-CO" class="h-100">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBA Carmen Londoño</title>
    <link rel="icon" type="image/x-icon" href="../media/LOGO.webp">
    <link rel="apple-touch-icon" type="image/png" href="../media/logoeu.webp">
    <link rel="apple-touch-startup-image" type="image/png" href="../media/logoeu.webp">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <!--Styles Bootstrap 5.3.1 Alpha-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!--Datatables Styles-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/css/dataTables.bootstrap5.min.css">
    
    <!--Datatables Buttons-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/css/buttons.bootstrap5.css">
    
    <!--Datatables Scripts-->
    <script type="text/javascript" src="../assets/datatables/js/jquery-3.5.1.min.js"> </script>
    <script type="text/javascript" src="../assets/datatables/js/jquery.dataTables.min.js"> </script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#tableresponsive').DataTable({
                responsive: true,
            });
        });
    </script>
  </head>
  <body>
    <main class="pt-5 container-fluid">
        <table class="table table-bordered table-striped table-hover" id="tableresponsive" style="width: 100%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Numero de telefono</th>
                    <th>Edad</th>
                    <th>Ciudad</th>
                </tr>
            </thead>  
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Veronica</td>
                    <td>Cortes Isaza</td>
                    <td>cv@gmail.com</td>
                    <td>3214567890</td>
                    <td>17</td>
                    <td>Abejorral</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
