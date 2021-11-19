<?php

class Tema{

    public $id_tema;
    public $nom_tema;

    public function __construct($id_tema, $nom_tema) 
    {
        $this->id_tema=$id_tema;
        $this->nom_tema=$nom_tema;
    }

    public static function consultar(){
        $listaTemas=[];
        $conexion=BD::crearInstancia();
        $sql= $conexion->query("SELECT * FROM temas");

        foreach($sql->fetchAll() as $tema){
            $listaTemas[] = new Tema($tema['id'], $tema['nom_tema']);
        }
        return $listaTemas;
    }

    public static function crear($nom_tema)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("INSERT INTO temas (nom_tema) VALUES (?)");
        $sql->execute(array($nom_tema));
        $ultimoRegistro = $conexion->lastInsertId();
        return $ultimoRegistro;
    }

//     public static function borrar($id_libro){
//         $conexion=BD::crearInstancia();
//         $sql=$conexion->prepare("DELETE FROM libros WHERE id_libro=?");
//         $sql->execute(array($id_libro));
//     }

//     public static function buscar($id_libro){
//         $conexion=BD::crearInstancia();
//         $sql=$conexion->prepare("SELECT * FROM libros WHERE id_libro=?");
//         $sql->execute(array($id_libro));

//         $libro=$sql->fetch();
//         return new Libro($libro['id_libro'], $libro['isbn'], $libro['titulo'], $libro['editorial_id']);
//     }

//     public static function editar($id_libro, $isbn, $titulo, $editorial_id)
//     {
//         $conexion=BD::crearInstancia();
//         $sql=$conexion->prepare("UPDATE libros SET isbn=?, titulo=?, editorial_id=? WHERE id_libro=?");
//         $sql->execute(array($isbn, $titulo, $editorial_id, $id_libro));
//     }

}

?>