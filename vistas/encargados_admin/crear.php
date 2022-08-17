<?php
include_once("modelos/encargado_admin.php");
?>
<br>
<div class="container">
    <div class="row d-flex flex-grid justify-content-center">
        <div class="col-md-8">
            <div class="card card-color">
                <div class="card-header text-white bg-warning text-center"><strong>Creación de Encargados Nuevos</strong></div>
                <div class="card-body">
                    <div class="container col-sm-6">
                        <form method="POST" action="index.php?controlador=encargadosAdmin&accion=crearEncargadoAdmin">
                            <div class="form-group">
                                <label for="inputidE"><strong>Id del Encargado</strong></label>
                                <input type="text" name="textidE" class="form-control" id="inputidE" placeholder="Ingrese el Id del Encargado" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputNombreM"><strong>Nombre del Maestro</strong></label>
                                <input type="text" name="textNombreM" class="form-control" id="inputNombreM" placeholder="Ingrese Nombre del Maestro" required>
                            </div>
                            <br>
                            <center><button type="submit" class="btn text-white btn-warning"><strong>Crear Encargado</strong></button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- cierre div col -->
    </div><!-- cierre div row -->
</div><!-- cierre div container -->