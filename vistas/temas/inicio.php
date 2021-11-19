<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=temas&&accion=crear
" role="button">Registrar Tema</a>
    </div>

    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id Tema</th>
            <th>Nombre Tema</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($temas as $tema){ ?>
        <tr>
            <td> <?php echo  $tema->id_tema;?> </td>
            <td> <?php echo $tema->nom_tema;?></td>
            <td>
               <div class="btn-group" role="group" aria-label="">
                   <a href="?controlador=temas&&accion=editar&id=<?php echo  $tema->id;?>" class="btn btn-info">Editar</a>
                   <a href="?controlador=temas&accion=borrar&id=<?php echo  $tema->id;?>" class="btn btn-danger">Borrar</a>
               </div> 
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>




