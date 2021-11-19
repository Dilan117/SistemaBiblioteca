<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=libros&&accion=crear
" role="button">Registrar Libro</a>
    </div>

    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id Libro</th>
            <th>Isbn</th>
            <th>Titulo</th>
            <th>Id Editorial</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($libros as $libro){ ?>
        <tr>
            <td> <?php echo  $libro->id_libro;?> </td>
            <td> <?php echo $libro->isbn;?></td>
            <td> <?php echo $libro->titulo;?></td>
            <td> <?php echo $libro->editorial_id;?></td>
            <td>
               <div class="btn-group" role="group" aria-label="">
                   <a href="?controlador=libros&&accion=editar&id=<?php echo  $libro->id_libro;?>" class="btn btn-info">Editar</a>

                   <a href="?controlador=libros&accion=borrar&id=<?php echo  $libro->id_libro;?>" class="btn btn-danger">Borrar</a>
               </div> 
        
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>
