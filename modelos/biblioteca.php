<?php

class Biblioteca{

    public $id_biblioteca;
    public $nom_biblioteca;

    public function __construct($id_biblioteca, $nom_biblioteca) 
    {
        $this->id_biblioteca=$id_biblioteca;
        $this->nom_biblioteca=$nom_biblioteca;
    }

    public static function consultar(){
        $listaBibliotecas=[];
        $conexion=BD::crearInstancia();
        $sql= $conexion->query("SELECT * FROM bibliotecas");

        foreach($sql->fetchAll() as $biblioteca){
            $listaBibliotecas[] = new Biblioteca($biblioteca['id'], $biblioteca['nom_biblioteca']);
        }
        return $listaBibliotecas;
    }

    public static function crear($nom_biblioteca)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("INSERT INTO bibliotecas (nom_biblioteca) VALUES (?)");
        $sql->execute(array($nom_biblioteca));
        $ultimoRegistro = $conexion->lastInsertId();
        return $ultimoRegistro;
    }
}