<?php
include_once("conexion.php");
include_once("modelos/programa_admin.php");
class ControladorProgramasAdmin{
    public function verCrearPaginaAdmin()
    {
        include_once "./vistas/programas_admin/crear.php";
    }
    public function crearProgramaAdmin()
    {
        if($_POST) {
            $nomPrograma = $_POST["textNombreP"];
            $idMaestro = $_POST["id_docente"];
            ProgramaAdmin::mdlCrearProgramaAdmin($nomPrograma, $idMaestro);
            echo '<script>';
            echo "window.location.href='index.php?controlador=programasAdmin&accion=listarProgramasAdmin'";
            echo '</script>';
        }
    }
    public function listarProgramasAdmin()
    {
        $datosProgramasAdmin = ProgramaAdmin::consultarProgramasAdmin();
        include_once "vistas/programas_admin/mostrar.php";
    }
    public function eliminarRegistroAdmin()
    {
        $idPrograma = $_GET['id'];
        ProgramaAdmin::mdlEliminarProgramaAdmin($idPrograma);
        echo '<script>';
        echo "window.location.href='index.php?controlador=programasAdmin&accion=listarProgramasAdmin'";
        echo '</script>'; 
    }
    public function editarRegistroAdmin(){
        $idPrograma=$_GET['id'];
        $DatosprogramaAdmin=ProgramaAdmin::mdlBuscarprogramaAdmin($idPrograma);
        if($_POST) {
            $idPrograma = $_POST['textIdprog'];
            $idMaestro = $_POST["id_docente"];
            $nomPrograma = $_POST["textNombreP"];
            ProgramaAdmin::mdlEditarAdmin($idPrograma, $idMaestro, $nomPrograma);
            echo '<script>';
            echo "window.location.href='index.php?controlador=programasAdmin&accion=listarProgramasAdmin'";
            echo '</script>';
        }
        include_once "./vistas/programas_admin/editar.php";
    }
}
?>