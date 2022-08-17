<br>
<div class="container">
    <h2 class="text-center">Programas</h2>
    <div class="container"><br>
        <!-- container para la tabla -->
        <table id="tablaprogramas" class="table table-bordered border-primary table-striped table-hover">
            <thead>
                <tr>
                    <th><center>Id</center></th>
                    <th><center>Nombre del Programa</center></th>
                    <th><center>Nombre del Maestro Encargado</center></th>
                    <th><center>Aciones</center></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datosProgramasUser as $p) { ?>
                    <tr>
                        <td><center><?php echo $p->idPrograma; ?></center></td>
                        <td><?php echo $p->nomPrograma; ?></td>
                        <td><?php echo $p->idMaestro; ?></td>
                        <td class="d-flex flex-row justify-content-center">
                            <div class="btn-group" role="group">
                                <a href="index.php?controlador=programasUser&accion=editarRegistroUser&id=<?php echo $p->idPrograma; ?>" class="btn btn-success">Editar</a>&nbsp&nbsp
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </div> <!-- fin container para la tabla -->
</div> <!-- fin container general  -->