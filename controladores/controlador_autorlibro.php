<?php

include_once("modelos/autorlibro.php");
include_once("modelos/libro.php");
include_once("modelos/autor.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorAutorlibro{

    public function inicio(){
        
        $autor_libro=AutorLibro::consultar();
        include_once("vistas/autorlibro/inicio.php");
    }

    public function crear()
    {
        if($_POST){
            print_r($_POST);
            $libro_id=$_POST['libro_id'];
            $autor_id=$_POST['autor_id'];
            AutorLibro::crear($libro_id, $autor_id);
            header("Location:./?controlador=autorlibro&&accion=inicio");
        }        
        include_once("vistas/autorlibro/crear.php");
    }

    // public function editar(){

    //     $id_editorial=$_GET['id'];
    //     $editorial=(Editorial::buscar($id_editorial));
    //     if($_POST)
    //     {
    //         $id_editorial=$_POST['id'];
    //         $nom_editorial=$_POST['nom_editorial'];
            
    //         Editorial::editar($id_editorial,$nom_editorial);
    //         header("Location:./?controlador=editoriales&&accion=inicio");
    //     }
    //     $id_editorial=$_GET['id'];
    //     $editorial=(Editorial::buscar($id_editorial));
        
    //     include_once("vistas/editoriales/editar.php");
    // }

    // public function borrar(){
    //     print_r($_GET);
    //     $id_editorial=$_GET['id'];
    //     Editorial::borrar($id_editorial);
    //     header("Location:./?controlador=editoriales&&accion=inicio");
    // }

}

?>