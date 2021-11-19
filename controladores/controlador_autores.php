<?php

include_once("modelos/autor.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorAutores{

    public function inicio(){
        
        $autores=Autor::consultar();
        include_once("vistas/autores/inicio.php");
    }

    public function crear()
    {
        if($_POST){
            print_r($_POST);
            $autor=$_POST['nom_autor'];
            Autor::crear($autor);
            header("Location:./?controlador=autores&&accion=inicio");
        }        
        include_once("vistas/autores/crear.php");
    }

    public function editar(){

        $id_autor=$_GET['id'];
        $autor=(Editorial::buscar($id_autor));
        if($_POST)
        {
            $id_autor=$_POST['id'];
            $nom_autor=$_POST['nom_autor'];
            
            Autor::editar($id_autor,$nom_autor);
            header("Location:./?controlador=autores&&accion=inicio");
        }
        $id_autor=$_GET['id'];
        $autor=(Editorial::buscar($id_autor));
        
        include_once("vistas/autores/editar.php");
    }

    public function borrar(){
        print_r($_GET);
        $id_autor=$_GET['id'];
        Autor::borrar($id_autor);
        header("Location:./?controlador=autores&&accion=inicio");
    }

}

?>