<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=autorlibro&&accion=crear
" role="button">Registrar Autor Libro</a>
    </div>

    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id </th>
            <th>libro ID</th>
            <th>Autor ID</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($autor_libro as $autor_libros){ ?>
        <tr>
            <td> <?php echo  $autor_libros->id;?> </td>
            <td> <?php echo $autor_libros->libro_id;?></td>
            <td> <?php echo $autor_libros->autor_id;?></td>
            <td>
               <div class="btn-group" role="group" aria-label="">
                   <a href="?controlador=autorlibro&&accion=editar&id=<?php echo  $autor_libros->id;?>" class="btn btn-info">Editar</a>

                   <a href="?controlador=autorlibro&accion=borrar&id=<?php echo  $autor_libros->id;?>" class="btn btn-danger">Borrar</a>
               </div> 
        
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>
