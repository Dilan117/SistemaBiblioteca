<?php

include_once("modelos/editorial.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorEditoriales{

    public function inicio(){
        
        $editoriales=Editorial::consultar();
        include_once("vistas/editoriales/inicio.php");
    }

    public function crear()
    {
        if($_POST){
            print_r($_POST);
            $editorial=$_POST['nom_editorial'];
            Editorial::crear($editorial);
            header("Location:./?controlador=editoriales&&accion=inicio");
        }        
        include_once("vistas/editoriales/crear.php");
    }

    public function editar(){

        $id_editorial=$_GET['id'];
        $editorial=(Editorial::buscar($id_editorial));
        if($_POST)
        {
            $id_editorial=$_POST['id'];
            $nom_editorial=$_POST['nom_editorial'];
            
            Editorial::editar($id_editorial,$nom_editorial);
            header("Location:./?controlador=editoriales&&accion=inicio");
        }
        $id_editorial=$_GET['id'];
        $editorial=(Editorial::buscar($id_editorial));
        
        include_once("vistas/editoriales/editar.php");
    }

    public function borrar(){
        print_r($_GET);
        $id_editorial=$_GET['id'];
        Editorial::borrar($id_editorial);
        header("Location:./?controlador=editoriales&&accion=inicio");
    }

}

?>