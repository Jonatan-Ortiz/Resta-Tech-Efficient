<?php
include_once("modelos/programa_admin.php");
include_once("conexion.php");
?>
<br>
<div class="container">
    <div class="row d-flex flex-grid justify-content-center">
        <div class="col-md-8">
            <div class="card card-color">
                <div class="card-header text-white bg-warning text-center"> Creación de Programas Nuevos</div>
                <div class="card-body">
                    <div class="container col-sm-6">
                        <form method="POST" action="index.php?controlador=programasAdmin&accion=crearProgramaAdmin">
                            <div class="form-group">
                                <label for="inputNombreP"><strong>Nombre del Programa</strong></label>
                                <input type="text" name="textNombreP" class="form-control" id="inputNombreP" placeholder="Ingrese Nombre para el Nuevo Programa" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputNombreM"><strong>Nombre del Maestro Encargado</strong></label>
                                
                                <select class="form-select" name="id_docente" aria-label="Default select example">
                                <option hidden>Maestros Encargados</option>
                                    <?php 
                                    $mysqli = new mysqli('localhost', 'root', '', 'restaurante');
                                    $query = $mysqli -> query ("SELECT * FROM encargados_programa");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores["id_docente_en"].'">'.$valores["nombre_maestro"].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <br>
                            <br>
                            <center><button type="submit" class="btn btn-warning">Crear Programa</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- cierre div col -->
    </div><!-- cierre div row -->
</div><!-- cierre div container -->