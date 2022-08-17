<?php
include_once "modelos/usuarios.php"; 
?>
<div class="container">
     <div class="card card-color">
          <div class="card-header">
               Registro de Usuarios
          </div>
          <div class="card-body">
               <div class="container col-sm-6">
                    <form method="POST" action="index.php?controlador=usuarios&accion=crear">
                         <div class="form-group" hidden>
                              <label for="inputPerfil">Perfil</label>
                              <input type="text" value="usuario" name="textPerfil" class="form-control" id="inputPerfil" placeholder="Ingrese Perfil" required>
                         </div>
                         <div class="form-group">
                              <label for="inputNombre">Nombres</label>
                              <input type="text" name="textNombre" class="form-control" id="inputNombre" placeholder="Ingrese Nombre" required>
                         </div>
                         <div class="form-group">
                              <label for="inputCorreo">Correo</label>
                              <input type="text" name="textCorreo" class="form-control" id="inputCorreo" aria-describedby="CorreoHelp" placeholder="Ingrese el Correo" required>
                              <small id="CorreoHelp" class="form-text text-muted">Por favor ingresa un correo válido</small>
                         </div>
                         <div class="form-group">
                              <label for="inputPassword">Contraseña</label>
                              <input type="password" name="textPassword" class="form-control" id="inputPassword" placeholder="Ingrese tu Contraseña" required>
                         </div>
                         <br>
                         <button type="submit" class="btn btn-primary">Registrarse</button>
                         <br>
                         <div class="form-group">
                              <p class="text-center py-3">¿Ya tienes una cuenta? | <a href="index.php?controlador=paginas&accion=login">Ingreso</a></p>
                         </div>
                    </form>
               </div>
          </div>
     </div>
     </div>