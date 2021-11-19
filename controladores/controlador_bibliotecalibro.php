<?php

include_once("modelos/libro.php");
include_once("modelos/bibliotecalibro.php");
include_once("conexion.php");
include_once("modelos/biblioteca.php");
include_once("controladores/controlador_bibliotecalibro.php");


BD::crearInstancia();

class ControladorBibliotecaLibro{

    public function inicio(){
        
        $bibliotecaslibros=BibliotecaLibro::consultar();
        include_once("vistas/bibliotecalibro/inicio.php");
    }

    public function crear()
    {

        $libros=Libro::consultar();
        $bibliotecas=Biblioteca::consultar();
        if($_POST){

            $cantidad = $_POST['cantidad']; 
            $contador = 1;
            while($contador <= $cantidad){ 
            $libro_id=$_POST['libro_id'];
            $biblioteca_id = $_POST['biblioteca_id'];
            $estado_id = $_POST['estado_id'];
            $biblioteca_libro_id = BibliotecaLibro::crear($libro_id, $biblioteca_id, $estado_id);
            $contador++;
            }
            header("Location:./reporteInventario.php?limit=$cantidad"); 
        }        
        
        include_once("vistas/bibliotecalibro/crear.php");
    }

}

