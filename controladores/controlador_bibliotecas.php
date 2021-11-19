<?php

include_once("modelos/biblioteca.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorBibliotecas{

    public function inicio(){
        
        $bibliotecas=Biblioteca::consultar();
        include_once("vistas/bibliotecas/inicio.php");
    }

    public function crear()
    {
        if($_POST){
            print_r($_POST);
            $biblioteca=$_POST['nom_biblioteca'];
            Biblioteca::crear($biblioteca);
            header("Location:./?controlador=bibliotecas&&accion=inicio");
        }        
        include_once("vistas/bibliotecas/crear.php");
    }
}