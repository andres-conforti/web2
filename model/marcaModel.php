<?php
require_once 'Model.php';
/**
*
*/
class marcaModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function GetMarcas(){
    $sentencia = $this->db->prepare( "SELECT * from marca");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetMarca($producto){
    $id_marca =$producto[0]["id_marca"];
    $sentencia = $this->db->prepare( "SELECT * from marca where id_marca=?");
    $sentencia->execute(array($id_marca));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);

  }
  function altaMarca($nombreMarca,$descripcion,$imagenMarca){
    $sentencia = $this->db->prepare("INSERT INTO marca(nombre, descripcion, imagen) VALUES(?,?,?)");
    $sentencia->execute(array($nombreMarca,$descripcion,$imagenMarca));
  }
  function borrarMarca($id_marca){
    $sentencia = $this->db->prepare( "DELETE from marca where id_marca=?");
    $sentencia->execute(array($id_marca));
  }
  function editarMarca($nombre,$descripcion,$imagen,$id_marca){
    $sentencia = $this->db->prepare( "UPDATE marca set nombre = ?, descripcion = ?, imagen = ? where id_marca=?");
    $sentencia->execute(array($nombre,$descripcion,$imagen,$id_marca));
  }

}

?>
