<?php
class ProgramaAdmin{
    public $idPrograma;
    public $nomPrograma;
    public $idMaestro;
    public function __construct($idP, $nomP, $idM){
        $this->idPrograma = $idP;
        $this->nomPrograma = $nomP;
        $this->idMaestro = $idM;               
    }
    //consultar 
    public static function consultarProgramasAdmin(){
        $listaProgramasAdmin = [];
        $dbconexion = baseDatos::crearInstancia();
        $sql = $dbconexion->query("SELECT Pro.id_programa, Pro.nombre_programa, Enc.nombre_maestro FROM programas Pro INNER JOIN encargados_programa Enc ON Pro.id_docente_en_fk = Enc.id_docente_en");
        foreach ($sql->fetchAll() as $programaAdmin) {
        $listaProgramasAdmin[] = new ProgramaAdmin($programaAdmin['id_programa'], $programaAdmin['nombre_programa'], $programaAdmin['nombre_maestro']);
        }
        return $listaProgramasAdmin;
    }
    public static function mdlCrearProgramaAdmin($nomP, $idM){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql= $conexionBasedatos->prepare("INSERT INTO programas(id_docente_en_fk, nombre_programa) values(?,?)");
        $sql->execute(array($idM, $nomP));
    }
    public static function mdlEliminarProgramaAdmin($idPrograma){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("DELETE FROM programas WHERE id_programa=?");
        $sql->execute(array($idPrograma));
    }
        public static function mdlBuscarprogramaAdmin($idPrograma){
            $conexionBasedatos = baseDatos::crearInstancia();
            $sql = $conexionBasedatos->prepare("SELECT Pro.id_programa, Pro.nombre_programa, Enc.nombre_maestro FROM programas Pro INNER JOIN encargados_programa Enc ON Pro.id_docente_en_fk = Enc.id_docente_en WHERE id_programa=?");
            $sql->execute(array($idPrograma));
            $programaAdmin=$sql->fetch();
            return new ProgramaAdmin($programaAdmin['id_programa'], $programaAdmin['nombre_programa'], $programaAdmin['nombre_maestro']);
        }
    public static function mdlEditarAdmin($idPrograma, $idMaestro, $nomPrograma){  
        $conexionBasedatos = baseDatos::crearInstancia(); 
        $sql = $conexionBasedatos->prepare("UPDATE programas SET id_docente_en_fk=?, nombre_programa=? WHERE id_programa=?");
        $sql->execute(array($idMaestro, $nomPrograma, $idPrograma));
    }
}
?>