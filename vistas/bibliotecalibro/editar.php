<div class="card">
    <div class="card-header">
        Actualizar libro
    </div>
    <div class="card-body">
        
    <form action="" method="post">

   <div class="mb-3">
     <label for="id" class="form-label">ID:</label>
     <input readonly type="text"
       class="form-control" value="<?php echo $libro->id_libro; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID libro">
   </div>


    <div class="mb-3">
      <label for="isbn" class="form-label">Isbn:</label>
      <input required type="text"
        class="form-control" value="<?php echo $libro->isbn; ?>" name="isbn" id="isbn" aria-describedby="id_libro" placeholder="Isbn">
    </div>

    <div class="mb-3">
      <label for="titulo" class="form-label">Titulo:</label>
      <input required type="text"
        class="form-control" value="<?php echo $libro->titulo; ?>" name="titulo" id="titulo" aria-describedby="id_libro" placeholder="titulo">
    </div>

    <div class="mb-3">
      <label for="id_editorial" class="form-label">ID Editorial:</label>
      <input required type="text"
        class="form-control" value="<?php echo $libro->editorial_id; ?>" name="id_editorial" id="id_editorial" aria-describedby="id_libro" placeholder="ID Editorial">
    </div>

    <input name="" id="" class="btn btn-success" type="submit" value="Actualizar libro">

    <a href="?controlador=editoriales&accion=inicio" class="btn btn-outline-warning">Cancelar</a>
    </form>

    </form>

    </div>
    
</div>