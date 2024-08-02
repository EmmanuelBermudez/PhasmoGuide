<?php
// controller/AuthController.php

include_once 'config/database.php';
include_once 'model/User.php';

class AuthController {
    private $db;
    private $user;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user = new User($this->db);
    }

    public function register($name, $email, $password) {
        if ($this->user->register($name, $email, $password)) {
            header("Location: ../views/login.html");
            exit();
        } else {
            echo "Error en el registro. El usuario puede ya existir.";
        }
    }

    public function login($email, $password) {
        if ($this->user->login($email, $password)) {
            header("Location: ../views/index.html");
            exit();
        } else {
            echo "Error en el inicio de sesión. Correo o contraseña incorrectos.";
        }
    }
}
?>
