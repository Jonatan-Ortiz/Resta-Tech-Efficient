<?php
class EncargadosAdmin{
    public $idEncargado;
    public $nomMaestro;

    public function __construct($idE, $nomM){
        $this->idEncargado=$idE;
        $this->nomMaestro=$nomM;
    }
    //consultar 
    public static function consultarEncargadosAdmin(){
        $listarEncargadosAdmin=[];
        $dbconexion=baseDatos::crearInstancia();
        $sql=$dbconexion->query("SELECT * FROM encargados_programa");
        foreach($sql->fetchAll() as $encargadoAdmin){
        $listarEncargadosAdmin[]=new EncargadosAdmin($encargadoAdmin['id_docente_en'], $encargadoAdmin['nombre_maestro']);
        }
        return $listarEncargadosAdmin;
    }
    public static function mdlCrearEncargadoAdmin($idE, $nomM){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("INSERT INTO encargados_programa(id_docente_en, nombre_maestro) values (?,?)");
        $sql->execute(array($idE, $nomM));
    }
    public static function mdlEliminarEncargadoAdmin($idEncargado){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("DELETE FROM encargados_programa WHERE id_docente_en=?");
        $sql->execute(array($idEncargado));
    }
    public static function mdlBuscarencargadoAdmin($idEncargado){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("SELECT * FROM encargados_programa WHERE id_docente_en=?");
        $sql->execute(array($idEncargado));
        $encargadoAdmin=$sql->fetch();
        return new EncargadosAdmin($encargadoAdmin['id_docente_en'], $encargadoAdmin['nombre_maestro']);
    }
    public static function mdlEditarAdmin($idEncargado, $nomMaestro){  
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("UPDATE encargados_programa SET nombre_maestro=? WHERE id_docente_en=?");
        $sql->execute(array( $nomMaestro, $idEncargado));
    }
}
?>