<?php
include_once("conexion.php");
include_once("modelos/estudiantes_admin.php");
class ControladorEstudiantesAdmin{
    public function listarEstudiantesAdmin(){
        $datosEstudiantesAdmin=EstudiantesAdmin::consultarEstudiantesAdmin();
        include_once "vistas/grados_admin/CRUD/mostrar.php";
    }
    public function verCrearPaginaAdmin()
    {
        include_once "./vistas/grados_admin/CRUD/crear.php";
    }
    public function crearEstudianteAdmin()
    {
        if ($_POST) {
            $num = $_POST['txtN°'];
            $documento = $_POST['txtdocumento'];
            $nombre = $_POST['txtnombreE'];
            $grado = $_POST['grados'];
            $grupo = $_POST["grupo"];
            $salon = $_POST['salon'];
            $programa = $_POST['programa'];
            EstudiantesAdmin::mdlCrearEstudianteAdmin( $documento, $num,$nombre, $grado, $grupo, $salon, $programa);
            echo '<script>';
            echo "window.location.href='index.php?controlador=estudiantesAdmin&accion=listarEstudiantesAdmin&grado=$grado&grupo=$grupo'";
            echo '</script>';
        }
    }
    public function eliminarRegistroAdmin()
    {
        $documento = $_GET['id'];
        EstudiantesAdmin::mdlEliminarEstudianteAdmin($documento);
        echo '<script>';
        echo "window.location.href='index.php?controlador=estudiantesAdmin&accion=listarEstudiantesAdmin&grado=$grado&grupo=$grupo'";
        echo '</script>'; 
        }
    public function editarRegistroAdmin(){
        $documento=$_GET['id'];
        $DatosEstudiantesAdmin=EstudiantesAdmin::mdlBuscarEstudianteAdmin($documento);
        if($_POST) {
            $documento = $_POST['txtDoc'];
            $nombreEstudiante = $_POST['txtNombreE'];
            $grado = $_POST['grados'];
            $grupo = $_POST['grupo'];
            $salon = $_POST['salon'];
            $programa = $_POST["programa"];
            EstudiantesAdmin::mdlEditarAdmin($documento, $nombreEstudiante, $grado, $grupo, $salon, $programa);
            echo '<script>';
            echo "window.location.href='index.php?controlador=estudiantesAdmin&accion=listarEstudiantesAdmin&grado=$grado&grupo=$grupo'";
            echo '</script>';
        }
        include_once "./vistas/grados_admin/CRUD/editar.php";
    }
    
}   
?>