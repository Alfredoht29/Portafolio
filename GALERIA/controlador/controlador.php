<?php
  class controlador{
  public function ver(){
  include_once 'vista/show.php';
  }
  public function edit(){
  include_once 'vista/cards.php';
  }
  public function add(){
    include_once 'vista/formAdd.php';
  }
  public function val(){
    include_once 'modelo/valImagen.php';
  }
  }
?>