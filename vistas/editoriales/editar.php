<div class="card">
    <div class="card-header">
        Actualizar editorial
    </div>
    <div class="card-body">
        
    <form action="" method="post">

   <div class="mb-3">
     <label for="id" class="form-label">ID:</label>
     <input readonly type="text"
       class="form-control" value="<?php echo $editorial->id_editorial; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID editorial">
   </div>


    <div class="mb-3">
      <label for="nom_editorial" class="form-label">Nombre Editorial:</label>
      <input required type="text"
        class="form-control" value="<?php echo $editorial->nom_editorial; ?>" name="nom_editorial" id="nom_editorial" aria-describedby="id_editorial" placeholder="Editorial">
    </div>

    <input name="" id="" class="btn btn-success" type="submit" value="Actualizar editorial">

    <a href="?controlador=editoriales&accion=inicio" class="btn btn-outline-warning">Cancelar</a>
    </form>

    </form>

    </div>
    
</div>