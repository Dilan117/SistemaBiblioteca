<div class="card">
    <div class="card-header">
        Agregar Inventario
    </div>
    <div class="card-body">
    <form action="" method="post">



    <div class="mb-3">
  <label for="" class="form-label">Cantidad de libros a registrar</label>
  <input type="number"
    class="form-control" name="cantidad" id="cantidad" min="1" value="1" >
</div>


      <div class="mb-3">
      <label for="libro_id" class="form-label">Titulo:</label>
        <select class="form-control" name="libro_id" id="libro_id">
          <?php foreach ($libros as $libro):?> 
            <option value="<?php echo $libro->id_libro; ?> "><?php echo $libro->titulo; ?></option>';      
          <?php endforeach; ?>
        </select>
      </div>
  
      <div class="mb-3">
        <label for="estado_id" class="form-label">Estado:</label>
        <input type="text" readonly="readonly"
          class="form-control" name="estado_id" value="1" id="estado_id" aria-describedby="estado_id" placeholder="1">
      </div>


      <div class="mb-3">
    <label for="biblioteca_id" class="form-label">Biblioteca:</label>
      <select class="form-control" name="biblioteca_id" id="biblioteca_id">
        <?php foreach ($bibliotecas as $biblioteca):?> 
          <option value="<?php echo $biblioteca->id_biblioteca; ?> "><?php echo $biblioteca->nom_biblioteca; ?></option>';      
        <?php endforeach; ?>
      </select>
    </div>


  <input name="" id="" class="btn btn-outline-success" type="submit" value="Agregar Inventario">

<a href="?controlador=bibliotecalibro&accion=inicio" class="btn btn-outline-warning">Cancelar</a>
    </form>
    </div>
</div>
