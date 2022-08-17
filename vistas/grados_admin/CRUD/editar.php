<?php
include_once("modelos/estudiantes_admin.php");
?>
<br>
<div class="container">
    <div class="row d-flex flex-grid justify-content-center">
        <div class="col-md-8">
            <div class="card card-color">
            <div class="card-header text-white bg-warning text-center"><strong>Actualizar Estudiante</strong></div>
            <div class="card-body">
                <div class="container col-sm-6">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="inputIdenc"><strong>Documento</strong></label>
                            <input type="text" reandoly value="<?php echo $DatosEstudiantesAdmin->documento; ?>" name="txtDoc" class="form-control" id="inputIdenc">
                        </div>
                        <br>
                        <div class="form-group">
                                <label for="inputNombreE"><strong>Nombre del Estudiante</strong></label>
                                <input type="text" value="<?php echo $DatosEstudiantesAdmin->nombreEstudiante; ?>" name="txtNombreE" class="form-control" id="inputNombreE" placeholder="Ingrese Nombre del Estudiante" required>
                            </div>
                            <br>
                                <div class="form-group">
                                <label for="inputGrados"><strong>Grado</strong></label>
                                <select class="form-select" name="grados" aria-label="Default select example">
                                <option hidden>Grados</option>
                                <?php 
                                    $mysqli = new mysqli('localhost', 'root', '', 'restaurante');
                                    $query = $mysqli -> query ("SELECT * FROM grados");
                                    while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores["id_grados"].'">'.$valores["numero_grado"].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <br> 
                            <div class="form-group">
                                <label for="inputNombreM"><strong>Grupo</strong></label>
                                <select class="form-select" name="grupo" aria-label="Default select example">
                                <option hidden>Grupos</option>
                                <?php 
                                    $mysqli = new mysqli('localhost', 'root', '', 'restaurante');
                                    $query = $mysqli -> query ("SELECT * FROM grupos");
                                    while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores["id_grupo"].'">'.$valores["numero_grupo"].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputNombreM"><strong>Salón</strong></label>
                                <select class="form-select" name="salon" aria-label="Default select example">
                                <option hidden>Salón</option>
                                    <?php 
                                    $mysqli = new mysqli('localhost', 'root', '', 'restaurante');
                                    $query = $mysqli -> query ("SELECT Dir.id_docente, Dir.nombre_docente, Sa.id_salon, Sa.id_docente_fk FROM salon Sa INNER JOIN director_grupo Dir ON Sa.id_docente_fk = Dir.id_docente ");
                                    while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores["id_salon"].'">'.$valores["nombre_docente"].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputNombreM"><strong>Programa</strong></label>
                                <select class="form-select" name="programa" aria-label="Default select example">
                                <option hidden>Programas</option>
                                <?php 
                                    $mysqli = new mysqli('localhost', 'root', '', 'restaurante');
                                    $query = $mysqli -> query ("SELECT * FROM programas");
                                    while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores["id_programa"].'">'.$valores["nombre_programa"].'</option>';
                                    }
                                ?>
                                </select>
                                </div>
                                <br>
                        <center><button type="submit" class="btn text-white btn-warning"><strong>Actualizar Estudiante</strong> </button></center>
                    </form>
                </div>
                </div>
            </div>
        </div><!-- cierre div col -->
    </div><!-- cierre div row -->
</div><!-- cierre div container -->