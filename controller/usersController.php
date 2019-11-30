<?php
require_once  "./view/usersView.php";
require_once  "./model/usersModel.php";
require_once "controller/sessionController.php";

class usersController extends sessionController
{
  protected $view;
  protected $model;
  protected $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new signinView();
    $this->view = new UsersView();
    $this->model = new usersModel();
    $this->Titulo = "Lista de Usuario";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }

  function InsertUsuario()
    {
      $user    = $_POST["usuario"];
      $email    = $_POST["email"];
      $pass    = $_POST["pass"];
      $Usuario = $this->model->GetUser($user,$email);

        if (isset($_POST["usuario"]) && isset($_POST["pass"]) && isset($_POST["email"])) {
          if ($Usuario[0]["username"] == NULL && $Usuario[0]["email"] == NULL) {
          session_start();
          $_SESSION["nombre"] = $user;
          header('Location: '.HOMEUSER);
          if (!empty($pass)) {
            $hash      = password_hash($pass, PASSWORD_DEFAULT);
            $isAdmin          = '0';
            $userRegistrado = $this->model->InsertarUsuario($user,$hash,$isAdmin,$email);

                  if (isset($userRegistrado)) {
                    session_start();
                    header('Location: '.HOMEUSER);

                    }}

          else ($Usuario[0]["username"] != NULL  || $Usuario[0]["email"] != NULL){
                    //$this->view->mostrarLogin("El usuario ya se encuentra registrado");
                    //echo "el usuario ya existe";
                    header('Location: '.LOGIN);
                  } 
                                }
                              }
                            }
                        }


 ?>