<?php
$accion="";
  if (isset($_GET['accion'])){
    $accion=$_GET['accion'];
  }
  else{
    $accion="ver";
  }
  include 'vista/view.php';
  
?>