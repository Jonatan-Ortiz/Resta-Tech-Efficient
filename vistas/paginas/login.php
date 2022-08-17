<?php
include_once("./controladores/controlador_usuarios.php");
$objIngreso=new ControladorUsuarios();
$objIngreso->ingreso();
?>
<div class="container">
    <div class="card card-color">
        <div class="card-header">
                Login
        </div>
        <div class="card-body">
                <div class="container col-sm-6">
                    <form method="POST" clss="p-2 p-2 vh-100 justify-content-center aling-items-center" action="">
                        <div class="form-group">
                            <label for="inputCorreo">Correo</label>
                            <input type="text" name="textCorreo" class="form-control" id="inputCorreo" placeholder="Ingrese el Correo" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" name="textPassword" class="form-control" id="inputPassword" placeholder="Ingrese tu Contraseña" required>
                        </div>
                        <br>
                        <button type="submit" name="login" class="btn btn-primary">Iniciar</button>
                        <br>
                        <div class="form-group">
                            <p class="text-center py-3">¿Aún no tienes una cuenta? | <a href="index.php?controlador=paginas&accion=registro">Registrate</a></p>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
    