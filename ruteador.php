<?php
include_once "controladores/controlador_$postcontrolador.php";
$controlador="Controlador".ucfirst($postcontrolador);
$objcontrolador=new $controlador();
$objcontrolador->$postaccion();
?>