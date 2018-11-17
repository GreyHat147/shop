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

            if (isset($user) && $password == $user->password) {
                $_SESSION['valid'] = true;
                $_SESSION['username'] = $username;
                header('Location: index.php');
            } else {
                echo "Usuario o contraseña invalido";
            }
        }
    }
?>