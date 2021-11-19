<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=librotema&&accion=crear
" role="button">Registrar Libro-Tema</a>
    </div>

    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id </th>
            <th>libro ID</th>
            <th>Tema ID</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($tema_libro as $tema_libros){ ?>
        <tr>
            <td> <?php echo  $tema_libros->id;?> </td>
            <td> <?php echo $tema_libros->libro_id;?></td>
            <td> <?php echo $tema_libros->tema_id;?></td>
            <td>
               <div class="btn-group" role="group" aria-label="">
                   <a href="?controlador=librotema&&accion=editar&id=<?php echo  $tema_libros->id;?>" class="btn btn-info">Editar</a>

                   <a href="?controlador=librotema&accion=borrar&id=<?php echo  $tema_libros->id;?>" class="btn btn-danger">Borrar</a>
               </div> 
        
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>
