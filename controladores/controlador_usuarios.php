<?php
include_once "conexion.php";
include_once "modelos/usuarios.php"; 
class ControladorUsuarios{
    /* crear registro de usuario*/
    public function crear(){
        if($_POST){
            $perfil=$_POST["textPerfil"];
            $nombre=$_POST["textNombre"];
            $correo=$_POST["textCorreo"];
            $contrasena=$_POST["textPassword"];
            Usuario::crear($perfil, $nombre, $correo, $contrasena);
            echo "<script> window.location= 'index.php?controlador=paginas&accion=login' </script>";
        }else{
            echo "<script>alert('Registro inválido').set('label', 'Aceptar')</script>";
        }
    }    /* fin de crear registro de usuario */
    /* funcion para ingresar o hacer login */
    public function ingreso(){
        if(isset ($_POST["login"])){
            include_once("./conexion.php");
            $postCorreo=$_POST["textCorreo"];
            $postPassword=$_POST["textPassword"];
        $pdo=baseDatos::crearInstancia();
        $consultasql=$pdo->prepare("SELECT * FROM usuarios WHERE correo=:correo AND contraseña=:contrasena");
        $consultasql->bindParam("correo",$postCorreo,PDO::PARAM_STR);
        $consultasql->bindParam("contrasena",$postPassword,PDO::PARAM_STR);
        $consultasql->execute();
        $registroEncontrado=$consultasql->fetch(PDO::FETCH_ASSOC);
        $nroRegistro=$consultasql->rowCount();
        if($nroRegistro>=1){
            $_SESSION["usuario"]=$registroEncontrado;
            print "<script>window.location = 'index.php';</script>";
        }else{
            echo "<script>alert('Inicio de Sesión inválido, Comprueba tu contraseña o correo').set('label', 'Aceptar')</script>";
        }  
        }
    }
    /* fin funcion para ingresar o hacer login */
    public function mostrar(){
        include_once "vistas/usuarios/mostrar.php";
    }
    public function editarRegistro(){
        $idUsaurio=$_GET['id'];
        $DatosencargadoAdmin=Usuario::mdlBuscarencargadoAdmin($idUsaurio);
        if($_POST) {
            $idUsuario = $_POST['textIdU'];
            $nombre = $_POST["textNombre"];
            $correo = $_POST["textCorreo"];
            $contrasena = $_POST["textContrasena"];
            Usuario::mdlEditarAdmin($idUsuario, $nombre, $correo, $contrasena);
            echo '<script>';
            echo "window.location.href='index.php?controlador=paginas&accion=inicio'";
            echo '</script>';
        }
        include_once "vistas/usuarios/editar.php";
    }
}
?>