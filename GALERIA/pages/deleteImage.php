<?php

  include_once '../modelo/conexion.php';
  include_once '../modelo/modelo.php';
  include_once '../controlador/controlador.php';
  
  $id= $_GET['id'];
  $image = new Imagen();
  $image->eliminar($id);
  
  header("location: ../?accion=edit");
  
?>