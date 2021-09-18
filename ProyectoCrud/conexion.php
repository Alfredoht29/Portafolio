<?php

class DB{
    private static $instancia=NULL;
    
    public static function crearInstancia(){
        if(!isset(self::$instancia)){
            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
            self::$instancia= NEW PDO('mysql:host=localhost;dbname=empleados','root','S1stemas21',$opcionesPDO);

        }
        return self::$instancia;
    }
}

?>