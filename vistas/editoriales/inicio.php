<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=editoriales&&accion=crear
" role="button">Registrar Editorial</a>
    </div>

    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id Editorial</th>
            <th>Nombre Editorial</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($editoriales as $editorial){ ?>
        <tr>
            <td> <?php echo  $editorial->id_editorial;?> </td>
            <td> <?php echo $editorial->nom_editorial;?></td>
            <td>
               <div class="btn-group" role="group" aria-label="">
                   <a href="?controlador=editoriales&&accion=editar&id=<?php echo  $editorial->id_editorial;?>" class="btn btn-info">Editar</a>
                   <a href="?controlador=editoriales&accion=borrar&id=<?php echo  $editorial->id_editorial;?>" class="btn btn-danger">Borrar</a>
               </div> 
        
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>




