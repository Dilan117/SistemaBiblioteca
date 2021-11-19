<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=bibliotecas&&accion=crear
" role="button">Registrar Biblioteca</a>
    </div>

    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id Biblioteca</th>
            <th>Nombre Biblioteca</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($bibliotecas as $biblioteca){ ?>
        <tr>
            <td> <?php echo  $biblioteca->id_biblioteca;?> </td>
            <td> <?php echo $biblioteca->nom_biblioteca;?></td>
            <td>
               <div class="btn-group" role="group" aria-label="">
                   <a href="?controlador=bibliotecas&&accion=editar&id=<?php echo  $biblioteca->id;?>" class="btn btn-info">Editar</a>
                   <a href="?controlador=bibliotecas&accion=borrar&id=<?php echo  $biblioteca->id;?>" class="btn btn-danger">Borrar</a>
               </div> 
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>




