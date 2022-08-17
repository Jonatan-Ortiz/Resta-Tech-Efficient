<?php
include_once("modelos/encargado_user.php");
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
                            <label for="inputIdEnc"><strong>Id del Encargado</strong></label>
                            <input type="text" reandoly value="<?php echo $datosEncargadosUser->idEncargado; ?>" name="textIdEnc" class="form-control" id="inputIdEnc">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputNombreE"><strong>Nombre del Encacargado</strong></label>
                            <input type="text" value="<?php echo $datosEncargadosUser->nomMaestro; ?>" name="textNombreE" class="form-control" id="inputNombreE" placeholder="Ingrese Nombre para el Nuevo Encargado" required>
                        </div>
                        <br>
                        <center><button type="submit" class="btn text-white btn-warning">Actualizar Encargado</button></center>
                    </form>
                </div>
                </div>
            </div>
        </div><!-- cierre div col -->
    </div><!-- cierre div row -->
</div><!-- cierre div container -->