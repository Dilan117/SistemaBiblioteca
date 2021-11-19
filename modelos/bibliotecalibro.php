<?php
include_once("modelos/libro.php");
include_once("modelos/bibliotecalibro.php");
include_once("conexion.php");
include_once("modelos/biblioteca.php");
include_once("controladores/controlador_bibliotecalibro.php");

class BibliotecaLibro{

    public $id_biblioteca_libro;
    public $libro_id;
    public $biblioteca_id;
    public $estado_id;

    public function __construct($id_biblioteca_libro, $libro_id, $biblioteca_id, $estado_id) 
    {
        $this->id_biblioteca_libro=$id_biblioteca_libro;
        $this->libro_id=$libro_id;
        $this->biblioteca_id=$biblioteca_id;
        $this->estado_id=$estado_id;
    }

    public static function consultar(){
        $listaBibliotecaLibros=[];
        $conexion=BD::crearInstancia();
        $sql= $conexion->query("SELECT * FROM biblioteca_libro");

        foreach($sql->fetchAll() as $BibliotecaLibros){
            $listaBibliotecaLibros[] = new BibliotecaLibro($BibliotecaLibros['id'], $BibliotecaLibros['libro_id'], $BibliotecaLibros['biblioteca_id'], $BibliotecaLibros['estado_id']);
        }
        return $listaBibliotecaLibros;
    }

    public static function crear($libro_id, $biblioteca_id, $estado_id)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("INSERT INTO biblioteca_libro (libro_id, biblioteca_id, estado_id) VALUES (?,?,?)");
        $sql->execute(array($libro_id, $biblioteca_id, $estado_id));
        $ultimoRegistro = $conexion->lastInsertId();
        return $ultimoRegistro;
        $ultimoRegistro = $li;
    }   


    public static function cu($cantidad){

            $inventario=[];
            $conexion=BD::crearInstancia();
            $sql= $conexion->query("SELECT *
            FROM `biblioteca_libro`
            ORDER BY `id` 
            DESC LIMIT {$cantidad} ");
    
            foreach($sql->fetchAll() as $BibliotecaLibros){
                $inventario[] = new BibliotecaLibro($BibliotecaLibros['id'], $BibliotecaLibros['libro_id'], $BibliotecaLibros['biblioteca_id'], $BibliotecaLibros['estado_id']);
            }

            return $inventario;
         

    }

}