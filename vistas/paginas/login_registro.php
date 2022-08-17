<?php     
include_once("controladores/controlador_usuarios.php");
$objIngreso=new ControladorUsuarios();
$objIngreso->ingreso();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vistas/recursos/css/login-register.css">
</head>
<body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>
                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <div class="form-group">
                            <label for="inputCorreo">Correo</label>
                            <input type="text" name="textCorreo" class="form-control" id="inputCorreo" placeholder="Ingrese el Correo" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" name="textPassword" class="form-control" id="inputPassword" placeholder="Ingrese tu Contraseña" required>
                        </div>
                        <center><button type="submit" name="login">Entrar</button></center>
                    </form>
                    <!--Register-->
                    <?php
                        include_once "modelos/usuarios.php"; 
                    ?>
                    <form action="index.php?controlador=usuarios&accion=crear" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <div class="form-group">
                            <div class="form-group" hidden>
                                <label for="inputPerfil">Perfil</label>
                                <input type="text" value="usuario" name="textPerfil" class="form-control" id="inputPerfil" placeholder="Ingrese Perfil" required>
                            </div>
                            <ul>
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
                            </ul>
                        </div>
                        <center><button type="submit">Regístrarse</button></center>
                    </form>
                </div>
            </div>
        </main>
        <script src="vistas/recursos/js/script1.js"></script>
</body>
</html>
<br>
<br>