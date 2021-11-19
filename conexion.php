<?php 

class BD{
    private static $instancia;
    public static function crearInstancia() {

        if(!isset(self::$instancia)){

            $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

            self::$instancia= new PDO('mysql:host=localhost;dbname=biblioteca1','root','',$opcionesPDO);
        }
        return self::$instancia;
    }
}

?>