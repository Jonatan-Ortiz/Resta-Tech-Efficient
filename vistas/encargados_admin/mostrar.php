<br>
<div class="container">
    <h2 class="text-center">Encargados</h2>
    <div class="container"> <!-- container para la tabla -->
    <div class="btn-group p-3" role="group" aria-label="">
            <a href="index.php?controlador=encargadosAdmin&accion=verCrearPaginaAdmin" class="btn btn-primary"> Crear Nuevo Programa</a>
        </div>
        <table id="tablaprogramas" class="table table-bordered border-primary table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Maestro Encargado</th>
                <th class="d-flex flex-row justify-content-center">Aciones</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach($datosEncargadosAdmin as $e) {?>
                <tr>
                    <td><?php echo $e->idEncargado ?></td>
                    <td><?php echo $e->nomMaestro ?></td>
                    <td class="d-flex flex-row justify-content-center">
                        <div class="btn-group" role="group">
                        <a href="index.php?controlador=encargadosAdmin&accion=editarRegistroAdmin&id=<?php echo $e->idEncargado; ?>" class="btn btn-success">Editar</a>&nbsp&nbsp
                        <a href="index.php?controlador=encargadosAdmin&accion=eliminarRegistroAdmin&id=<?php echo $e->idEncargado; ?>" class="btn btn-danger">Eliminar</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
    </div> <!-- fin container para la tabla -->
</div> <!-- fin container general  -->