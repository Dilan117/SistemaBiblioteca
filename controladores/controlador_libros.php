<?php

include_once("modelos/editorial.php");
include_once("modelos/librotema.php");
include_once("modelos/autor.php");
include_once("modelos/libro.php");
include_once("conexion.php");
include_once("modelos/autorlibro.php");
include_once("modelos/tema.php");


BD::crearInstancia();

class ControladorLibros{

    public function inicio(){
        
        $libros=Libro::consultar();
        include_once("vistas/libros/inicio.php");
    }

    public static function crear()
    {
        $autores=Autor::consultar();
        $editoriales=Editorial::consultar();
        $temas=Tema::consultar();
        if($_POST){
            print_r($_POST);
            $isbn=$_POST['isbn'];
            $titulo = $_POST['titulo'];
            $editorial_id = $_POST['editorial_id'];
            $autor_id=$_POST['autor_id'];
            $tema_id=$_POST['tema_id'];
            $libro_id = Libro::crear($isbn, $titulo, $editorial_id);
            AutorLibro::crear($libro_id, $autor_id);
            LibroTema::crear($libro_id, $tema_id);
            header("Location:./?controlador=libros&&accion=inicio");
        }        
        include_once("vistas/libros/crear.php");
    }

    public function editar(){

        $id_libro=$_GET['id'];
        $libro=(Libro::buscar($id_libro));
        if($_POST)
        {
            $id_libro=$_POST['id'];
            $isbn=$_POST['isbn'];
            $titulo=$_POST['titulo'];
            $editorial_id=$_POST['editorial_id'];
            
            Libro::editar($id_libro,$isbn,$titulo,$editorial_id);
            header("Location:./?controlador=libros&&accion=inicio");
        }
        $id_libro=$_GET['id'];
        $libro=(Libro::buscar($id_libro));
        
        include_once("vistas/libros/editar.php");
    }

    public function borrar(){
        print_r($_GET);
        $id_libro=$_GET['id'];
        Libro::borrar($id_libro);
        header("Location:./?controlador=libros&&accion=inicio");
    }

}

?>