<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <!--  IMPLEMENTAR DATATABLE -->
     <!-- Los siguientes archivos de biblioteca CSS se cargan para usar en este ejemplo
     para proporcionar el estilo de la tabla: de la web: 
     https://datatables.net/examples/styling/bootstrap5.html -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
      <!--  https://datatables.net/examples/styling/bootstrap5.html -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
     <!-- creamos un archivo datatable.js y hacemos link a -->
     <script src="vistas/recursos/js/datatable.js"></script>
   <!-- --------FIN  IMPLEMENTAR DATATABLE--------- -->
    <title>Resta Tech Efficient</title>
    <link rel="shortcut icon" href="./vistas/recursos/images/logo2.jpg">
</head>
<body>
    <div class="container-fluid">
       <?php
        include_once "vistas/modulos/navbar.php";
        include_once("./ruteador.php");
        include_once "vistas/modulos/footer.php";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>