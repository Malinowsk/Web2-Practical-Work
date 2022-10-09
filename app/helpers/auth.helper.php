<?php

class AuthHelper {

    public function __construct() {
            session_start();
    }
     /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */
    public function checkLoggedIn() {
        //session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . "login");
            die();
        }
    } 
    
    public function getLoggedIn() {
        //session_start();
        return isset($_SESSION['IS_LOGGED']);
    }

}