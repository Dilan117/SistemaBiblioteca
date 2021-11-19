<?php

class AutorLibro{

    public $id;
    public $libro_id;
    public $autor_id;

    public function __construct($id, $libro_id, $autor_id) 
    {
        $this->id=$id;
        $this->libro_id=$libro_id;
        $this->autor_id=$autor_id;
    }

    public static function consultar(){
        $listaAutorLibro=[];
        $conexion=BD::crearInstancia();
        $sql= $conexion->query("SELECT * FROM autor_libro");

        foreach($sql->fetchAll() as $autor_libroo){
            $listaAutorLibro[] = new AutorLibro($autor_libroo['id'], $autor_libroo['libro_id'], $autor_libroo['autor_id']);
        }
        return $listaAutorLibro;
    }

    public static function crear($libro_id, $autor_id)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("INSERT INTO autor_libro (libro_id, autor_id) VALUES ( ?,?)");
        $sql->execute(array($libro_id, $autor_id));
    }

    // public static function borrar($id_editorial){
    //     $conexion=BD::crearInstancia();
    //     $sql=$conexion->prepare("DELETE FROM editoriales WHERE id_editorial=?");
    //     $sql->execute(array($id_editorial));
    // }

    // public static function buscar($id_editorial){
    //     $conexion=BD::crearInstancia();
    //     $sql=$conexion->prepare("SELECT * FROM editoriales WHERE id_editorial=?");
    //     $sql->execute(array($id_editorial));

    //     $editorial=$sql->fetch();
    //     return new Editorial($editorial['id_editorial'], $editorial['nom_editorial']);
    // }

    // public static function editar($id_editorial, $nom_editorial)
    // {
    //     $conexion=BD::crearInstancia();
    //     $sql=$conexion->prepare("UPDATE editoriales SET nom_editorial=? WHERE id_editorial=?");
    //     $sql->execute(array($nom_editorial, $id_editorial));
    // }


}

?>