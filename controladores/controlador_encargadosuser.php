<?php
include_once("conexion.php");
include_once("modelos/encargado_user.php");
class ControladorEncargadosUser{
    public function listarEncargadosUser(){
        $datosEncargadosUser=EncargadosUser::consultarEncargadosUser();
        include_once "vistas/encargados_user/mostrar.php";
    }
    public function editarRegistroUser(){
        $idEncargado=$_GET['id'];
        $datosEncargadosUser=EncargadosUser::mdlBuscarencargadoUser($idEncargado);
        if($_POST) {
            $idEncargado = $_POST['textIdEnc'];
            $nomMaestro = $_POST["textNombreE"];
            EncargadosUser::mdlEditarUser($idEncargado, $nomMaestro);
            echo '<script>';
            echo "window.location.href='index.php?controlador=encargadosUser&accion=listarEncargadosUser'";
            echo '</script>';
        }
        include_once "./vistas/encargados_user/editar.php";
    }
}




?>