<?php

class Autor{

    public $id_autor;
    public $nom_autor;

    public function __construct($id_autor, $nom_autor) 
    {
        $this->id_autor=$id_autor;
        $this->nom_autor=$nom_autor;
    }

    public static function consultar(){
        $listaAutores=[];
        $conexion=BD::crearInstancia();
        $sql= $conexion->query("SELECT * FROM autores");

        foreach($sql->fetchAll() as $autor){
            $listaAutores[] = new Autor($autor['id'], $autor['nom_autor']);
        }
        return $listaAutores;
    }

    public static function crear($nom_autor)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("INSERT INTO autores (nom_autor) VALUES (?)");
        $sql->execute(array($nom_autor));
    }

    public static function borrar($id_autor){
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("DELETE FROM autores WHERE id=?");
        $sql->execute(array($id_autor));
    }

    public static function buscar($id_autor){
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("SELECT * FROM autores WHERE id=?");
        $sql->execute(array($id_autor));

        $autor=$sql->fetch();
        return new Editorial($autor['id'], $autor['nom_autor']);
    }

    public static function editar($id_autor, $nom_autor)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("UPDATE autores SET nom_autor=? WHERE id=?");
        $sql->execute(array($nom_autor, $id_autor));
    }

}

?>