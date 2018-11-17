<?php 
    require_once 'model/user.php';
    class LoginController {

        private $model;
    
        public function __CONSTRUCT(){
            $this->model = new User();
        }

        public function login() {
            $username = $_POST["username"];
            $password = $_POST["password"];

            echo $username . "  " . $password;

            $user = $this->model->getUserByUsername($username);

            echo $user->username;

            if (isset($user) && md5($password) == $user->password) {
                $_SESSION['valid'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $user->id_user;
                header('Location: index.php');
            } else {
                echo "Usuario o contraseña invalido";
            }
        }

        public function logout() {
            session_start();
            unset($_SESSION["username"]);
            unset($_SESSION["valid"]);
            header('Location: index.php');
        }

        public function signup() {
            $result = $this->model->create($_POST);
            header('Location: index.php');
        }
    }
?>