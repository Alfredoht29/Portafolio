
<div class="container-xl">
      <div class="card-columns ">
        <?php

        include_once 'modelo/conexion.php';
        include_once 'modelo/modelo.php';

        $image = new Imagen();
        $rows = $image->mostrar();
        if(!empty($rows)){
          foreach($rows as $row){
        ?>
        <div class="card text-white bg-dark h-25" data-toggle="modal"
          data-target="#mdl<?php echo $row['ID'];?>">
          <img class="card-img-top" alt=""
          src="/GALERIA/imagenes/<?php
          echo $row['IMAGE'];?>">
          <div class='p-3'>
            <h5><?php echo $row['TITLE'];?></h5><br>
            <h6><?php echo $row['DESCRIPTION'];?></h6>
            <a class="btn text-white" href=<?php echo $row['URL'];?>><?php echo $row['TITLE'];?></a>
          </div>  
        </div>
      <?php }  } ?>
    </div>
  </div>
</div>