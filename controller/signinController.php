<?php

require_once  "./view/signinView.php";
require_once  "./model/usersModel.php";

class signinController
{
    private $view;
    private $model;
    private $Titulo;

    public function __construct()
    {
        $this->view = new signinView();
        $this->model = new usersModel();
        $this->Titulo = "Login";
    }

    public function login()
    {
        $this->view->mostrarLogin();
    }

    public function logout(){
     session_start();
     session_destroy();
     header('Location: '.LOGIN);
    }

    public function verificarLogin()
    {
        $user   = $_POST["usuario"];
        $pass   = $_POST["pass"];
        $dbUser = $this->model->GetUser($user);

        if (isset($dbUser)) {
                    if (!empty($dbUser)&&(password_verify($pass, $dbUser[0]["pass"]))&&$dbUser[0]["isAdmin"] == '1') { //&&$dbUser[0]["isAdmin"]
                        session_start();
                        $_SESSION["nombre"] = $user;
                        header('Location: '.HOMEADMIN);

                  } else {
                        if (!empty($dbUser)&&(password_verify($pass, $dbUser[0]["pass"]))&&$dbUser[0]["isAdmin"] == '0') { //&&(isAdmin[isAdmin]==0)
                        session_start();
                        $_SESSION["nombre"] = $user;
                        header('Location: '.HOMEUSER);
                        //print_r("HOLA MUNDO SOY EL USUARIO COMUN");
                    } else {
                          if (!empty($dbUser)&&(password_verify($pass, $dbUser[0]["pass"]) == false)) {
                        $this->view->mostrarLogin("Contraseña incorrecta");
                      }
                      else {
                        $this->view->mostrarLogin("Datos incorrectos, intentelo de nuevo");
                    }
                }
            }
        }
      }

      function sendPass(){
        $email = $_POST["email"];
        $checkEmail = implode("", $this->model->GetEmail($email));
        //echo $checkEmail;
        
        if (isset($email) && $checkEmail == $email) {
            $randomPass = $this->generateRandomString();
            $user = implode("", $this->model->GetCuenta($email));
            $hash = password_hash($randomPass, PASSWORD_DEFAULT);
            $this->model->nuevaPass($hash,$user);

            echo "ESTOS DATOS SON ENVIADOS AL EMAIL";
            echo "<pre> usuario: ".$user."<pre>";
            echo " password: ".$randomPass."<pre>";

            /*
            $subject = 'datos de usuario';
            $message = 'Usuario: '.$user." - Contraseña: ".$randomPass;
            mail($email,$subject,$message);
            header('Location: '.LOGIN);
            */
                    }
                       }        

        function recuperarPass(){
        $this->view->recuperarPass();
            }

        function generateRandomString($length = 6) {
            return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
            }
            
        }