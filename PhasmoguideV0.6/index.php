<?php
// index.php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action'])) {
    include_once 'controller/AuthController.php';
    $authController = new AuthController();

    if ($_GET['action'] === 'register') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $authController->register($name, $email, $password);
    } elseif ($_GET['action'] === 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $authController->login($email, $password);
    }
}
?>
