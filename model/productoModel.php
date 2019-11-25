<?php
require_once 'Model.php';
/**
*
*/
class productoModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  function GetProductos(){

    $sentencia = $this->db->prepare( "SELECT * from producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetProducto($id_producto){
    $sentencia = $this->db->prepare( "SELECT * from producto where id_producto=?");
    $sentencia->execute(array($id_producto));

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetProductoFiltrado($id_marca){
    $sentencia = $this->db->prepare( "SELECT * from producto where id_marca=?");
    $sentencia->execute(array($id_marca));

    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  private function uploadImage($image){
    $target = 'img/' . uniqid() . '.png';
    move_uploaded_file($image, $target);
    return $target;
}
  public function altaProducto($nombreProducto, $descripcion, $precio, $marca, $imagen = null) {
    $pathImg = null;
    if ($imagen)
        $pathImg = $this->uploadImage($imagen);

        $sentencia = $this->db->prepare("INSERT INTO producto(nombre, descripcion, precio, id_marca, imagen) VALUES(?,?,?,?,?)");
        $sentencia->execute([$nombreProducto, $descripcion, $precio, $marca, $pathImg]);
      }

  function borrarProducto($id_producto){
    $sentencia = $this->db->prepare( "DELETE from producto where id_producto=?");
    $sentencia->execute(array($id_producto));
  }


  function formEditarProducto($nombre,$descripcion,$precio,$id_marca,$imagen,$id_producto){
    $sentencia = $this->db->prepare( "UPDATE producto set nombre = ?, descripcion = ?, precio = ?, id_marca = ?, imagen = ? where id_producto=?");
    $sentencia->execute(array($nombre,$descripcion,$precio,$id_marca,$imagen,$id_producto));
  }

  function borrarImagen($idProducto){
    unlink($imagen);
    $sentencia = $this->db->prepare( "UPDATE producto SET imagen=NULL where id_producto=?");
    $sentencia->execute(array($idProducto));
  }

}

?>
