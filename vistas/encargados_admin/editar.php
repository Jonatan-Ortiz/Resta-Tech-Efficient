<?php
include_once("modelos/encargado_admin.php");
?>
<br>
<div class="container">
    <div class="row d-flex flex-grid justify-content-center">
        <div class="col-md-8">
            <div class="card card-color">
            <div class="card-header text-white bg-warning text-center"><strong>Actualizar Encargado</strong></div>
            <div class="card-body">
                <div class="container col-sm-6">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="inputIdenc"><strong>Id del Encargado</strong></label>
                            <input type="text" reandoly value="<?php echo $DatosencargadoAdmin->idEncargado; ?>" name="textIdenc" class="form-control" id="inputIdenc">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputNombreM"><strong>Nombre del Maestro Encargado</strong></label>
                            <input type="text" value="<?php echo $DatosencargadoAdmin->nomMaestro; ?>" name="textNombreM" class="form-control" id="inputNombreM" placeholder="Ingrese Nombre del Maestro Encargado" required>
                        </div>
                            <br>
                            <center><button type="submit" class="btn text-white btn-warning"><strong>Actualizar Encargado</strong> </button></center>
                    </form>
                    </div>
                </div>
            </div>
        </div><!-- cierre div col -->
    </div><!-- cierre div row -->
</div><!-- cierre div container -->