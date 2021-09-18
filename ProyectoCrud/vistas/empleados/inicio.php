<a name="" id="" class="btn btn-secondary" href="?controlador=empleados&accion=crear" role="button">Agregar Empleado</a>
<table class="table tabler-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php  foreach ($empleados as $d) {?>
        <tr>
            <td><?php echo $d->id;?></td>
            <td><?php echo $d->nombre;?></td>
            <td><?php echo $d->correo;?></td>
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=empleados&accion=editar&id=<?php echo $d->id;?>" class="btn btn-primary">Editar</a>
                <a href="?controlador=empleados&accion=borrar&id=<?php echo $d->id;?>" class="btn btn-danger">Borrar</a>
            </div>
            </td>
        </tr>
<?php  } ?>
    </tbody>
</table>
