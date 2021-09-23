<?php


  include_once 'subirImagen.php';    

  include_once 'conexion.php';

  include_once 'modelo.php';
  
  $parImg= new ImageVal();
  
  $imageIns= new Imagen();
  $imageIns->insertar($parImg);
  header("location:./?accion=add");
?>