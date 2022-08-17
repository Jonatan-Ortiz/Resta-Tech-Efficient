<?php
/* require_once "conexion.php";
baseDatos::crearInstancia(); */
$postcontrolador="paginas";
$postaccion="inicio";
if(isset($_GET['controlador']) && isset($_GET['accion']) ){
        if((!empty($_GET['controlador'])) && (!empty($_GET['accion']) )){
            $postcontrolador=$_GET['controlador'];
            $postaccion=$_GET['accion'];
        }
}
include_once "vistas/plantilla.php";
?>