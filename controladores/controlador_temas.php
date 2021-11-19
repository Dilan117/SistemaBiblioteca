<?php

include_once("modelos/tema.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorTemas{

    public function inicio(){
        
        $temas=Tema::consultar();
        include_once("vistas/temas/inicio.php");
    }

    public function crear()
    {
        if($_POST){
            print_r($_POST);
            $tema=$_POST['nom_tema'];
            Autor::crear($autor);
            header("Location:./?controlador=temas&&accion=inicio");
        }        
        include_once("vistas/temas/crear.php");
    }

    // public function editar(){

    //     $id_autor=$_GET['id'];
    //     $autor=(Editorial::buscar($id_autor));
    //     if($_POST)
    //     {
    //         $id_autor=$_POST['id'];
    //         $nom_autor=$_POST['nom_autor'];
            
    //         Autor::editar($id_autor,$nom_autor);
    //         header("Location:./?controlador=autores&&accion=inicio");
    //     }
    //     $id_autor=$_GET['id'];
    //     $autor=(Editorial::buscar($id_autor));
        
    //     include_once("vistas/autores/editar.php");
    // }

    // public function borrar(){
    //     print_r($_GET);
    //     $id_autor=$_GET['id'];
    //     Autor::borrar($id_autor);
    //     header("Location:./?controlador=autores&&accion=inicio");
    // }

}

?>