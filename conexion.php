<?php
class baseDatos{
    private static $instancia=NULL;
        public static function crearInstancia(){
            if(!isset(self::$instancia)){
                $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
                self::$instancia=new PDO('mysql:host=localhost;dbname=restaurante','root','',$opcionesPDO);
              /*  echo "Conexión exitosa"; */
            }
            return self::$instancia;
        } 
}
?>