<div class="card">
    <div class="card-header">
        Agregar Libro

    </div>
    <div class="card-body">
        
    <form action="" method="post">

    <div class="mb-3">
      <label for="isbn" class="form-label">Isbn:</label>
      <input required type="text"
        class="form-control" name="isbn" id="isbn" aria-describedby="id_libro" placeholder="">
    </div>

    <div class="mb-3">
      <label for="titulo" class="form-label">Titulo:</label>
      <input required type="text"
        class="form-control" name="titulo" id="titulo" aria-describedby="id_libro" placeholder="">
    </div>

    <div class="mb-3">
    <label for="editorial_id" class="form-label">Editorial:</label>
      <select class="form-control" name="editorial_id" id="editorial_id">
        <?php foreach ($editoriales as $editorial):?> 
          <option value="<?php echo $editorial->id_editorial; ?> "><?php echo $editorial->nom_editorial; ?></option>';      
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-3">
    <label for="autor_id" class="form-label">Autor:</label>
    <select class="form-control" name="autor_id" id="id">
    <?php foreach ($autores as $autor):?> 
    <option value="<?php echo $autor->id_autor; ?> "><?php echo $autor->nom_autor; ?></option>';
    <?php endforeach; ?>
    </select>
    </div>
    

    <div class="mb-3">
    <label for="tema_id" class="form-label">Tema:</label>
    <select class="form-control" name="tema_id" id="id">
    <?php foreach ($temas as $tema):?> 
    <option value="<?php echo $tema->id_tema; ?> "><?php echo $tema->nom_tema; ?></option>';         
    <?php endforeach; ?>
    </select>
    </div>


    <input name="" id="" class="btn btn-outline-success" type="submit" value="Agregar libro">

    <a href="?controlador=libros&accion=inicio" class="btn btn-outline-warning">Cancelar</a>
    </form>

    </div>
    
</div>