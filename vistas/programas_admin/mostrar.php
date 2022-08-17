<br>
<div class="container">
    <h2 class="text-center">Programas</h2>
    <div class="container">
        <!-- container para la tabla -->
        <div class="btn-group p-3" role="group" aria-label="">
            <a href="index.php?controlador=programasAdmin&accion=verCrearPaginaAdmin" class="btn btn-primary"> Crear Nuevo Programa</a>
        </div>
        <table id="tablaprogramas" class="table table-bordered border-primary table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre del Programa</th>
                    <th>Nombre del Maestro Encargado</th>
                    <th class="d-flex flex-row justify-content-center">Aciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datosProgramasAdmin as $p) { ?>
                    <tr>
                        <td><?php echo $p->idPrograma; ?></td>
                        <td><?php echo $p->nomPrograma; ?></td>
                        <td><?php echo $p->idMaestro; ?></td>
                        <td class="d-flex flex-row justify-content-center">
                            <div class="btn-group" role="group">
                                <a href="index.php?controlador=programasAdmin&accion=editarRegistroAdmin&id=<?php echo $p->idPrograma; ?>" class="btn btn-success">Editar</a>&nbsp&nbsp
                                <a href="index.php?controlador=programasAdmin&accion=eliminarRegistroAdmin&id=<?php echo $p->idPrograma; ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div> <!-- fin container para la tabla -->
</div> <!-- fin container general  -->