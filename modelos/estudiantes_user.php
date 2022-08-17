<?php
class EstudiantesUser{
    public $num;
    public $documento;
    public $nombreEstudiante;
    public $grado;
    public $grupo;
    public $salon;
    public $programa;
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
    public static function consultarEstudiantesUser(){
        $listaEstudiantesUser = [];
        $dbconexion = baseDatos::crearInstancia();
        $sql = $dbconexion->query("SELECT Est.num, Est.documento_identidad, Est.nombre, Gra.numero_grado, Gru.numero_grupo, Sal.id_salon, Pro.nombre_programa FROM estudiantes Est 
                                    INNER JOIN grados Gra ON Est.id_grados_fk = Gra.id_grados
                                    INNER JOIN grupos Gru ON Est.id_grupo_fk = Gru.id_grupo
                                    INNER JOIN salon Sal ON Est.id_salon_fk = Sal.id_salon
                                    INNER JOIN programas Pro ON Est.id_programa_fk = Pro.id_programa");
        foreach ($sql->fetchAll() as $estudianteUser){
            $listaEstudiantesUser[] = new EstudiantesUser($estudianteUser['num'], $estudianteUser['documento_identidad'], $estudianteUser['nombre'], $estudianteUser['numero_grado'], $estudianteUser['numero_grupo'], $estudianteUser['id_salon'], $estudianteUser['nombre_programa']);
        }
        return $listaEstudiantesUser;
    }
    public static function mdlBuscarEstudianteUser($documento){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("SELECT  Est.documento_identidad, Est.num, Est.nombre, Gra.numero_grado, Gru.numero_grupo, Sal.id_salon, Pro.nombre_programa FROM estudiantes Est 
                                            INNER JOIN grados Gra ON Est.id_grados_fk = Gra.id_grados
                                            INNER JOIN grupos Gru ON Est.id_grupo_fk = Gru.id_grupo
                                            INNER JOIN salon Sal ON Est.id_salon_fk = Sal.id_salon
                                            INNER JOIN programas Pro ON Est.id_programa_fk = Pro.id_programa WHERE documento_identidad=?");
        $sql->execute(array($documento));
        $estudianteUser=$sql->fetch();
        return new EstudiantesUser($estudianteUser['num'], $estudianteUser['documento_identidad'], $estudianteUser['nombre'], $estudianteUser['numero_grado'], $estudianteUser['numero_grupo'], $estudianteUser['id_salon'], $estudianteUser['nombre_programa']);
    }
    public static function mdlEditarUser($documento, $nombreEstudiante, $grado, $grupo, $salon, $programa){  
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("UPDATE estudiantes SET nombre=?, id_grados_fk=?, id_grupo_fk=?, id_salon_fk=?, id_programa_fk=? WHERE documento_identidad=?");
        $sql->execute(array($nombreEstudiante, $grado, $grupo, $salon, $programa, $documento));
    }
}
?>