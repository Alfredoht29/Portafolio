<?php

class Empleado{
    public $id;
    public $nombre;
    public $correo;
    public function __construct($id,$nombre,$correo){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
    }
    public static function consultar(){
        $listaEmpleados=[];
        $conexionDB=DB::crearInstancia();
        $sql= $conexionDB->query("SELECT * FROM empleado");
        
        foreach($sql->fetchAll() as $d){

            $listaEmpleados[]= new Empleado($d['id'],$d['nombre'],$d['correo']);
        }
        return $listaEmpleados;
    }
    public static function crear($nombre,$correo){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("INSERT INTO empleado(nombre,correo) VALUES(?,?)");
        $sql->execute(array($nombre,$correo));
    }
    public static function borrar($id){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("DELETE FROM empleado WHERE id=?");
        $sql->execute(array($id));
    }
    public static function buscar($id){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("SELECT * FROM empleado WHERE id=?");
        $sql->execute(array($id));
        $d=$sql->fetch();
        return new Empleado($d['id'],$d['nombre'],$d['correo']);
    }
    public static function editar($id,$nombre,$correo){
        $conexionDB=DB::crearInstancia();
        $sql=$conexionDB->prepare("UPDATE empleado SET nombre=?,correo=? WHERE id=?");
        $sql->execute(array($nombre,$correo,$id));
    }
}

?>