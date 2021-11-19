<?php

class Editorial{

    public $id_editorial;
    public $nom_editorial;

    public function __construct($id_editorial, $nom_editorial) 
    {
        $this->id_editorial=$id_editorial;
        $this->nom_editorial=$nom_editorial;
    }

    public static function consultar(){
        $listaEditoriales=[];
        $conexion=BD::crearInstancia();
        $sql= $conexion->query("SELECT * FROM editoriales");

        foreach($sql->fetchAll() as $editorial){
            $listaEditoriales[] = new Editorial($editorial['id_editorial'], $editorial['nom_editorial']);
        }
        return $listaEditoriales;
    }

    public static function crear($nom_editorial)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("INSERT INTO editoriales (nom_editorial) VALUES (?)");
        $sql->execute(array($nom_editorial));
    }

    public static function borrar($id_editorial){
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("DELETE FROM editoriales WHERE id_editorial=?");
        $sql->execute(array($id_editorial));
    }

    public static function buscar($id_editorial){
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("SELECT * FROM editoriales WHERE id_editorial=?");
        $sql->execute(array($id_editorial));

        $editorial=$sql->fetch();
        return new Editorial($editorial['id_editorial'], $editorial['nom_editorial']);
    }

    public static function editar($id_editorial, $nom_editorial)
    {
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("UPDATE editoriales SET nom_editorial=? WHERE id_editorial=?");
        $sql->execute(array($nom_editorial, $id_editorial));
    }

    public function buscartodo(){
        $conexion=BD::crearInstancia();
        $sql=$conexion->prepare("SELECT * FROM editoriales");
        $sql->execute();

        $editorial=$sql->FetchAll(PDO::FETCH_OBJ);
        return $editorial;
    }

}

?>