<?php

include_once("modelos/librotema.php");
include_once("modelos/libro.php");
include_once("modelos/tema.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorLibrotema{

    public function inicio(){
        
        $tema_libro=LibroTema::consultar();
        include_once("vistas/librotema/inicio.php");
    }

    public function crear()
    {
        if($_POST){
            print_r($_POST);
            $libro_id=$_POST['libro_id'];
            $tema_id=$_POST['tema_id'];
            LibroTema::crear($libro_id, $tema_id);
            header("Location:./?controlador=librotema&&accion=inicio");
        }        
        include_once("vistas/librotema/crear.php");
    }
}