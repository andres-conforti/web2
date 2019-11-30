<?php
require_once 'Model.php';
/**
*
*/
class usersModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  function GetUsuarios(){
    $sentencia = $this->db->prepare( "SELECT * from usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetUser($user,$email){
    $sentencia = $this->db->prepare( "SELECT * from usuario where username=?,email=?");//user name(en el metodo de arriba tambien)
    $sentencia->execute(array($user,$email));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($user, $pass, $isAdmin, $email){
    $sentencia = $this->db->prepare("INSERT INTO usuario(username, pass, isAdmin, email) VALUES(?,?,?,?)");
    $sentencia->execute(array($user, $pass, $isAdmin, $email));
    }
  
   function AdminCheck($idUser){
    $sentencia = $this->db->prepare( "SELECT isAdmin from usuario where id_usuario=?");
    $sentencia->execute(array($idUser));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function AdminSet($isAdmin, $idUser){
    $sentencia = $this->db->prepare("UPDATE usuario set isAdmin=? where id_usuario=?");
    $sentencia->execute([$isAdmin, $idUser]);
    }

  function BorrarUser($idUser){
    $sentencia = $this->db->prepare( "DELETE from usuario where id_usuario=?");
    $sentencia->execute(array($idUser));
   }

}


?>