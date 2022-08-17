<?php
include_once("conexion.php");
include_once("modelos/estudiantes_user.php");
class ControladorEstudiantesUser{
    public function listarEstudiantesUser(){
        $datosEstudiantesUser=EstudiantesUser::consultarEstudiantesUser();
        include_once "vistas/grados_user/CRUD/mostrar.php";
    }
    public function editarRegistroUser(){
        $documento=$_GET['id'];
        $DatosEstudiantesUser=EstudiantesUser::mdlBuscarEstudianteUser($documento);
        if($_POST) {
            $documento = $_POST['txtDoc'];
            $nombreEstudiante = $_POST['txtNombreE'];
            $grado = $_POST['grados'];
            $grupo = $_POST['grupo'];
            $salon = $_POST['salon'];
            $programa = $_POST["programa"];
            EstudiantesUser::mdlEditarUser($documento, $nombreEstudiante, $grado, $grupo, $salon, $programa);
            echo '<script>';
            echo "window.location.href='index.php?controlador=estudiantesUser&accion=listarEstudiantesUser&grado=$grado&grupo=$grupo'";
            echo '</script>';
        }
        include_once "./vistas/grados_user/CRUD/editar.php";
    }
}   
?>