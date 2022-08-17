<?php
if ($_GET){
    $grup = $_REQUEST['grupo'];
    $grad = $_REQUEST['grado'];
}
?>
<div class="container">
    <br>
    <h1 class="text"><?php echo ($grad+5)."°".($grup) ?><hr></h1>
    <div class="container"> <!-- container para la tabla -->
        <div class="btn-group p-3" role="group" aria-label="">
        <a href="index.php?controlador=estudiantesAdmin&accion=verCrearPaginaAdmin" class="btn text-white btn-primary"><strong>Guardar</strong></a>
        </div>
    <table id="tablaprogramas" class="table table-bordered border-primary table-striped table-hover">
        <thead>
                <tr>
                <th><center>N°</center></th>
                <th><center>Documento</center></th>
                <th><center>Nombre Estudiante</center></th>
                <th><center>Grado</center></th>
                <th><center>Grupo</center></th>
                <th hidden><center>Salón</center></th>
                <th><center>Programa</center></th>
                <th><center>Historial</center></th>
                <th><center>Aciones</center></th>
                </tr>
        </thead>
        <tbody>
        <?php foreach ($datosEstudiantesUser as $e) { 
            if (($grad +5 ==$e->grado) && ($grup ==$e->grupo)){ ?>
                <tr>
                    <td><center><?php echo $e->num; ?></center></td>
                    <td><center><?php echo $e->documento; ?></center></td>
                    <td><?php echo $e->nombreEstudiante; ?></td>
                    <td><center><?php echo $e->grado; ?></center></td>
                    <td><center><?php echo $e->grupo; ?></center></td>
                    <td hidden><center><?php echo $e->salon; ?></center></td>
                    <td><?php echo $e->programa; ?></td>
                    <td><center><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></center></td> 
                    <td class="d-flex flex-row justify-content-center">
                    <div class="btn-group" role="group">
                        <a href="index.php?controlador=estudiantesUser&accion=editarRegistroUser&id=<?php echo $e->documento; ?>" class="btn btn-success"><strong>Editar</strong></a>&nbsp&nbsp
                </div>
                </td>
                </tr>
                <?php } }?>
        </tbody>
    </table>
    </div> <!-- fin container para la tabla -->
</div> <!-- fin container general  -->