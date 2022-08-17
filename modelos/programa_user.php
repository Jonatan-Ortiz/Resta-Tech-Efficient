<?php
class ProgramaUser{
    public $idPrograma;
    public $nomPrograma;
    public $idMaestro;
    public function __construct($idP, $nomP, $idM){
        $this->idPrograma = $idP;
        $this->nomPrograma = $nomP;
        $this->idMaestro = $idM;
    }
    //consultar 
    public static function consultarProgramasUser(){
        $listaProgramasUser = [];
        $dbconexion = baseDatos::crearInstancia();
        $sql = $dbconexion->query("SELECT Pro.id_programa, Pro.nombre_programa, Enc.nombre_maestro FROM programas Pro INNER JOIN encargados_programa Enc ON Pro.id_docente_en_fk = Enc.id_docente_en");
        foreach ($sql->fetchAll() as $programaUser) {
        $listaProgramasUser[] = new ProgramaUser($programaUser['id_programa'], $programaUser['nombre_programa'], $programaUser['nombre_maestro']);
        }
        return $listaProgramasUser;
    }
    public static function mdlBuscarprogramaUser($idPrograma){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("SELECT Pro.id_programa, Pro.nombre_programa, Enc.nombre_maestro FROM programas Pro INNER JOIN encargados_programa Enc ON Pro.id_docente_en_fk = Enc.id_docente_en  WHERE id_programa=?");
        $sql->execute(array($idPrograma));
        $programaUser=$sql->fetch();
        return new ProgramaUser($programaUser['id_programa'], $programaUser['nombre_programa'], $programaUser['nombre_maestro']);
    }
    public static function mdlEditarUser($idPrograma, $idMaestro, $nomPrograma){  
        $conexionBasedatos = baseDatos::crearInstancia(); 
        $sql = $conexionBasedatos->prepare("UPDATE programas SET id_docente_en_fk=?, nombre_programa=? WHERE id_programa=?");
        $sql->execute(array($idMaestro, $nomPrograma, $idPrograma));
    }
}


