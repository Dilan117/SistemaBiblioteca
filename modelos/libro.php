<?php

class Libro{

    public $id_libro;
    public $isbn;
    public $titulo;
    public $editorial_id;

    public function __construct($id_libro, $isbn, $titulo, $editorial_id) 
    {
        $this->id_libro=$id_libro;
        $this->isbn=$isbn;
        $this->titulo=$titulo;
        $this->editorial_id=$editorial_id;
    }

    public static function consultar(){
        $listaLibros=[];
        $conexion=BD::crearInstancia();
        $sql= $conexion->query("SELECT * FROM libros");

        foreach($sql->fetchAll() as $libro){
            $listaLibros[] = new Libro($libro['id_libro'], $libro['isbn'], $libro['titulo'], $libro['editorial_id']);
        }
        return $listaLibros;
    }

    public static function crear($isbn, $titulo, $editorial_id)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("INSERT INTO libros (isbn, titulo, editorial_id) VALUES (?,?,?)");
        $sql->execute(array($isbn, $titulo, $editorial_id));
        $ultimoRegistro = $conexion->lastInsertId();
        return $ultimoRegistro;
    }

    public static function borrar($id_libro){
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("DELETE FROM libros WHERE id_libro=?");
        $sql->execute(array($id_libro));
    }

    public static function buscar($id_libro){
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("SELECT * FROM libros WHERE id_libro=?");
        $sql->execute(array($id_libro));

        $libro=$sql->fetch();
        return new Libro($libro['id_libro'], $libro['isbn'], $libro['titulo'], $libro['editorial_id']);
    }

    public static function editar($id_libro, $isbn, $titulo, $editorial_id)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("UPDATE libros SET isbn=?, titulo=?, editorial_id=? WHERE id_libro=?");
        $sql->execute(array($isbn, $titulo, $editorial_id, $id_libro));
    }

}

?>