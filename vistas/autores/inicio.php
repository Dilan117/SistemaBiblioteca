<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=autores&&accion=crear
" role="button">Registrar Autor</a>
    </div>

    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id Autor</th>
            <th>Nombre Autor</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($autores as $autor){ ?>
        <tr>
            <td> <?php echo  $autor->id_autor;?> </td>
            <td> <?php echo $autor->nom_autor;?></td>
            <td>
               <div class="btn-group" role="group" aria-label="">
                   <a href="?controlador=autores&&accion=editar&id=<?php echo  $autor->id;?>" class="btn btn-info">Editar</a>
                   <a href="?controlador=autores&accion=borrar&id=<?php echo  $autor->id;?>" class="btn btn-danger">Borrar</a>
               </div> 
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>




