<br>
<div class="container">
    <h2 class="text-center">Encargados</h2><br>
    <div class="container"> <!-- container para la tabla -->
    <table id="tablaprogramas" class="table table-bordered border-primary table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del Maestro Encargado</th>
                <th class="d-flex flex-row justify-content-center">Aciones</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach($datosEncargadosUser as $e) {?>
                <tr>
                    <td><?php echo $e->idEncargado ?></td>
                    <td><?php echo $e->nomMaestro ?></td>
                    <td class="d-flex flex-row justify-content-center">
                        <div class="btn-group" role="group">
                        <a href="index.php?controlador=encargadosUser&accion=editarRegistroUser&id=<?php echo $e->idEncargado; ?>" class="btn btn-success">Editar</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
    </div> <!-- fin container para la tabla -->
</div> <!-- fin container general  -->