<?php

class LibroTema{

    public $id;
    public $libro_id;
    public $tema_id;

    public function __construct($id, $libro_id, $tema_id) 
    {
        $this->id=$id;
        $this->libro_id=$libro_id;
        $this->tema_id=$tema_id;
    }

    public static function consultar(){
        $listaLibroTema=[];
        $conexion=BD::crearInstancia();
        $sql= $conexion->query("SELECT * FROM libro_tema");

        foreach($sql->fetchAll() as $tema_libroo){
            $listaLibroTema[] = new LibroTema($tema_libroo['id'], $tema_libroo['libro_id'], $tema_libroo['tema_id']);
        }
        return $listaLibroTema;
    }

    public static function crear($libro_id, $tema_id)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("INSERT INTO libro_tema (libro_id, tema_id) VALUES ( ?,?)");
        $sql->execute(array($libro_id, $tema_id));
    }
}