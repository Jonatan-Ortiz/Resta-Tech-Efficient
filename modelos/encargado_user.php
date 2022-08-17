<?php
class EncargadosUser{
    public $idEncargado;
    public $nomMaestro;
    public function __construct($idE, $nomM){
        $this->idEncargado=$idE;
        $this->nomMaestro=$nomM;
    }
    //consultar 
    public static function consultarEncargadosUser(){
        $listarEncargadosUser=[];
        $dbconexion=baseDatos::crearInstancia();
        $sql=$dbconexion->query("SELECT * FROM encargados_programa");
        foreach($sql->fetchAll() as $encargadoAdmin){
        $listarEncargadosUser[]=new EncargadosUser($encargadoAdmin['id_docente_en'], $encargadoAdmin['nombre_maestro']);
        }
        return $listarEncargadosUser;
    }
    public static function mdlBuscarencargadoUser($idEncargado){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("SELECT * FROM encargados_programa WHERE id_docente_en=?");
        $sql->execute(array($idEncargado));
        $encargadoUser=$sql->fetch();
        return new EncargadosUser($encargadoUser['id_docente_en'], $encargadoUser['nombre_maestro']);
    }
    public static function mdlEditarUser($idEncargado, $nomMaestro){  
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("UPDATE encargados_programa SET nombre_maestro=? WHERE id_docente_en=?");
        $sql->execute(array( $nomMaestro, $idEncargado));
    }
}
?>