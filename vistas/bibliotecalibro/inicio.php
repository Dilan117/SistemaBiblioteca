<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=bibliotecalibro&&accion=crear
" role="button">Registrar Inventario</a>
    </div>

    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id Biblioteca-Libro</th>
            <th>Id Libro</th>
            <th>Id Biblioteca</th>
            <th>Id Estatus</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($bibliotecaslibros as $bibliotecalibro){ ?>
        <tr>
            <td> <?php echo  $bibliotecalibro->id_biblioteca_libro;?> </td>
            <td> <?php echo $bibliotecalibro->libro_id;?></td>
            <td> <?php echo $bibliotecalibro->biblioteca_id;?></td>
            <td> <?php echo $bibliotecalibro->estado_id;?></td>
            <td>
               <div class="btn-group" role="group" aria-label="">
                   <a href="?controlador=bibliotecalibro&&accion=editar&id=<?php echo  $bibliotecalibro->id_biblioteca_libro;?>" class="btn btn-info">Editar</a>

                   <a href="?controlador=bibliotecalibro&accion=borrar&id=<?php echo  $bibliotecalibro->id_biblioteca_libro;?>" class="btn btn-danger">Borrar</a>
               </div> 
        
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>
