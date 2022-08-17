<?php
class ControladorPaginas{
    public function inicio(){
        include_once "vistas/paginas/inicio.php";
    }
    public function servicios(){
        include_once "vistas/paginas/servicios.php";
    }
    public function contacto(){
        include_once "vistas/paginas/formulario_contacto/contacto.php";
    }
    public function nosotros(){
        include_once "vistas/paginas/nosotros.php";
    }
    public function encargados(){
        include_once "vistas/paginas/encargados.php";
    }
    public function inscritos(){
        include_once "vistas/paginas/contacto.php";
    }
    public function programas(){
        include_once "vistas/paginas/contacto.php";
    }
    public function login(){
        include_once "vistas/paginas/login_registro.php";
    }
    public function registro(){
        include_once "vistas/paginas/login_registro.php";
    }
    public function cerrarsesion(){
        include_once "cerrarsesion.php";
    }
    public function enviarMensaje(){
        include_once "vistas/paginas/formulario_contacto/enviar.php";
    }
    public function enviarMensajeNuevo(){
        include_once "vistas/paginas/formulario_contacto/contacto.php";
    }
    public function enviar(){
        include_once "vistas/paginas/formulario_contacto/mensaje-de-envio.php";
    }
}
?>