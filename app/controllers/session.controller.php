<?php
require_once './app/views/session.view.php';
require_once './app/models/user.model.php';

class SessionController {
    private $user_model;
    private $session_view;
    private $authHelper;

    public function __construct() {
        $this->user_model = new UserModel();
        $this->session_view = new SessionView();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin() {
        if (!($this->authHelper->getLoggedIn()))
            $this->session_view->showLogin();
        else
            echo "error 404";
    }

    public function validateUser() {

        if (($this->authHelper->getLoggedIn())){
            echo "usuario ya se encuenta logeado";
            die();
        }

        // toma los datos del form
        if (isset($_POST['email']) && isset($_POST['password']) ) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // busco el usuario por email
            $user = $this->user_model->getUserByEmail($email);

            // verifico que el usuario existe y que las contraseñas son iguales
            if ($user && password_verify($password, $user->password)) {

                // inicio una session para este usuario
                session_start();
                $_SESSION['USER_ID'] = $user->id_usuario;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['IS_LOGGED'] = true;

                header("Location: " . BASE_URL);
            } else {
                // si los datos son incorrectos muestro el form con un erro
                $this->session_view->showLogin("El usuario o la contraseña no existe.");
            } 
        }
        else{
            echo "acceso denegado";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

}