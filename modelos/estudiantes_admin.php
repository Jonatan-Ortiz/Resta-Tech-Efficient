<?php
class EstudiantesAdmin{
    public $num;
    public $documento;
    public $nombreEstudiante;
    public $grado;
    public $grupo;
    public $salon;
    public $programa;
    public $grad;
    public $grup;
    public function __construct($n, $d, $nE, $gr, $g, $s, $p){
        $this->num = $n;
        $this->documento = $d;
        $this->nombreEstudiante = $nE;
        $this->grado = $gr;
        $this->grupo = $g;
        $this->salon = $s;
        $this->programa = $p;
    }
    //consultar 
    public static function consultarEstudiantesAdmin(){
        $listaEstudiantesAdmin = [];
        $dbconexion = baseDatos::crearInstancia();
        $sql = $dbconexion->query("SELECT  Est.documento_identidad, Est.num,Est.nombre, Gra.numero_grado, Gru.numero_grupo, Sal.id_salon, Pro.nombre_programa FROM estudiantes Est 
                                    INNER JOIN grados Gra ON Est.id_grados_fk = Gra.id_grados
                                    INNER JOIN grupos Gru ON Est.id_grupo_fk = Gru.id_grupo
                                    INNER JOIN salon Sal ON Est.id_salon_fk = Sal.id_salon
                                    INNER JOIN programas Pro ON Est.id_programa_fk = Pro.id_programa");
        foreach ($sql->fetchAll() as $estudianteAdmin){
            $listaEstudiantesAdmin[] = new EstudiantesAdmin($estudianteAdmin['num'], $estudianteAdmin['documento_identidad'], $estudianteAdmin['nombre'], $estudianteAdmin['numero_grado'], $estudianteAdmin['numero_grupo'], $estudianteAdmin['id_salon'], $estudianteAdmin['nombre_programa']);
        }
        return $listaEstudiantesAdmin;
    }
    public static function mdlCrearEstudianteAdmin( $d, $n, $nE, $gr, $g, $s, $p){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("INSERT INTO estudiantes( documento_identidad, num, nombre, id_grados_fk, id_grupo_fk, id_salon_fk, id_programa_fk) values (?,?,?,?,?,?,?)");
        $sql->execute(array( $d, $n, $nE, $gr, $g, $s, $p));
    }
    public static function mdlEliminarEstudianteAdmin($documento){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("DELETE FROM estudiantes WHERE documento_identidad=?");
        $sql->execute(array($documento));
    }
    public static function mdlBuscarEstudianteAdmin($documento){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("SELECT  Est.documento_identidad, Est.num, Est.nombre, Gra.numero_grado, Gru.numero_grupo, Sal.id_salon, Pro.nombre_programa FROM estudiantes Est 
                                            INNER JOIN grados Gra ON Est.id_grados_fk = Gra.id_grados
                                            INNER JOIN grupos Gru ON Est.id_grupo_fk = Gru.id_grupo
                                            INNER JOIN salon Sal ON Est.id_salon_fk = Sal.id_salon
                                            INNER JOIN programas Pro ON Est.id_programa_fk = Pro.id_programa WHERE documento_identidad=?");
        $sql->execute(array($documento));
        $estudianteAdmin=$sql->fetch();
        return new EstudiantesAdmin($estudianteAdmin['num'], $estudianteAdmin['documento_identidad'], $estudianteAdmin['nombre'], $estudianteAdmin['numero_grado'], $estudianteAdmin['numero_grupo'], $estudianteAdmin['id_salon'], $estudianteAdmin['nombre_programa']);
    }
    public static function mdlEditarAdmin($documento, $nombreEstudiante, $grado, $grupo, $salon, $programa){  
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("UPDATE estudiantes SET nombre=?, id_grados_fk=?, id_grupo_fk=?, id_salon_fk=?, id_programa_fk=? WHERE documento_identidad=?");
        $sql->execute(array($nombreEstudiante, $grado, $grupo, $salon, $programa, $documento));
    }
}
?>