<?php
include_once("conexion.php");
include_once("modelos/programa_user.php");
class ControladorProgramasUser{
    public function listarProgramasUser(){
        $datosProgramasUser = ProgramaUser::consultarProgramasUser();
        include_once "vistas/programas_user/mostrar.php";
    }
    public function editarRegistroUser(){
        $idPrograma=$_GET['id'];
        $DatosprogramaUser=ProgramaUser::mdlBuscarprogramaUser($idPrograma);
        if($_POST) {
            $idPrograma = $_POST['textIdprog'];
            $idMaestro = $_POST['id_docente'];
            $nomPrograma = $_POST["textNombreP"];
            ProgramaUser::mdlEditarUser($idPrograma, $idMaestro, $nomPrograma);
            echo '<script>';
            echo "window.location.href='index.php?controlador=programasUser&accion=listarProgramasUser'";
            echo '</script>';
        }
        include_once "./vistas/programas_user/editar.php";
    }
}
?>