<!doctype html>
<html lang="en">
  <head>
    <title>biblioteca</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
    <link rel="stylesheet" href="assets/js/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="assets/js/plugins/select2/select2-bootstrap.min.css">


  </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Biblioteca <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="?controlador=paginas&&accion=inicio#">Home</a>
            <a class="nav-item nav-link" href="?controlador=editoriales&&accion=inicio#">Editoriales</a>
            <a class="nav-item nav-link" href="?controlador=libros&&accion=inicio#">Libros</a>
            <a class="nav-item nav-link" href="?controlador=autores&&accion=inicio#">Autores</a>
            <a class="nav-item nav-link" href="?controlador=autorlibro&&accion=inicio#">Autor-Libro</a>
            <a class="nav-item nav-link" href="?controlador=temas&&accion=inicio#">Tema</a>
            <a class="nav-item nav-link" href="?controlador=librotema&&accion=inicio#">Libro-Tema</a>
            <a class="nav-item nav-link" href="?controlador=bibliotecas&&accion=inicio#">Biblioteca</a>
            <a class="nav-item nav-link" href="?controlador=bibliotecalibro&&accion=inicio#">Inventario</a>
        </div>
    </nav>

      <div class="container">
          <div class="row">
              <div class="col-12">
                  <?php include_once("ruteador.php"); ?>               
              </div>
              
          </div>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <script src="assets/js/plugins/select2/select2.full.min.js"></script>
   
  </body>
</html>