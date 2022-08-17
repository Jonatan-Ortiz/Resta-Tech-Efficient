<?php
include_once("conexion.php");
include_once("modelos/encargado_admin.php");
class ControladorEncargadosAdmin{
    public function verCrearPaginaAdmin()
    {
        include_once "./vistas/encargados_admin/crear.php";
    }
    public function crearEncargadoAdmin()
    {
        if ($_POST) {
            $idEncargado = $_POST["textidE"];
            $nomMaestro = $_POST["textNombreM"];
            EncargadosAdmin::mdlCrearEncargadoAdmin($idEncargado, $nomMaestro);
            echo '<script>';
            echo "window.location.href='index.php?controlador=encargadosAdmin&accion=listarEncargadosAdmin'";
            echo '</script>';
        }
    }
    public function listarEncargadosAdmin(){
        $datosEncargadosAdmin=EncargadosAdmin::consultarEncargadosAdmin();
        include_once "vistas/encargados_admin/mostrar.php";
    }
    public function eliminarRegistroAdmin(){
        $idEncargado = $_GET['id'];
        EncargadosAdmin::mdlEliminarEncargadoAdmin($idEncargado);
        echo '<script>';
        echo "window.location.href='index.php?controlador=encargadosAdmin&accion=listarEncargadosAdmin'";
        echo '</script>';
    }
    public function editarRegistroAdmin(){
        $idEncargado=$_GET['id'];
        /*print_r(Programa1::mdlBuscarprograma1($idPrograma));*/
        $DatosencargadoAdmin=EncargadosAdmin::mdlBuscarencargadoAdmin($idEncargado);
        if($_POST) {
            $idEncargado = $_POST['textIdenc'];
            $nomMaestro = $_POST["textNombreM"];
            EncargadosAdmin::mdlEditarAdmin($idEncargado, $nomMaestro);
            echo '<script>';
            echo "window.location.href='index.php?controlador=encargadosAdmin&accion=listarEncargadosAdmin'";
            echo '</script>';
        }
        include_once "./vistas/encargados_admin/editar.php";
    }
}




?>