<?php
class Usuario{
    public $idUsuario;
    public $nombre;
    public $correo;
    public $contrasena;
    public function __construct($idU, $nom, $cor, $contra){
        $this->idUsuario=$idU;
        $this->nombre=$nom;
        $this->correo=$cor;
        $this->contrasena=$contra;
    }
    public static function crear($perfil, $nombre, $correo, $contrasena){
        $conexionBasedatos=baseDatos::crearInstancia();
        $sql=$conexionBasedatos->prepare("INSERT INTO usuarios (perfil, nombre, correo, contraseña) VALUES (?,?,?,?)");
        $sql->execute(array($perfil, $nombre, $correo, $contrasena));
    } 
    public static function mdlBuscarencargadoAdmin($idUsuario){
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("SELECT * FROM usuarios WHERE id_usuario=?");
        $sql->execute(array($idUsuario));
        $usuarioAdmin=$sql->fetch();
        return new Usuario($usuarioAdmin['id-usuario'], $usuarioAdmin['nombre'], $usuarioAdmin['correo'], $usuarioAdmin['contraseña']);
    }
    public static function mdlEditarAdmin($idUsuario, $nombre, $correo, $contrasena){  
        $conexionBasedatos = baseDatos::crearInstancia();
        $sql = $conexionBasedatos->prepare("UPDATE usuarios SET nombre=?, correo=?, contraseña=? WHERE id_usuario=?");
        $sql->execute(array($idUsuario, $nombre, $correo, $contrasena));
    }
}
?>