<?php

class LoginController {
    public static function ViewLoginForm(){
        include "./Model/LoginModel.php";
        $model = new LoginModel();
        include "./View/Login/FormLogin.php";
    }
    public static function ValidateLogin(){
        include "./Model/LoginModel.php";
        $model = new LoginModel();
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];
        $user = $model->user = $_SESSION['user'];
        $pass = $model->pass = $_SESSION['pass'];
        if (empty($user) || empty($pass)) {
            header('Location: /login/form');
            session_destroy();
            exit();
        } else {
            $model->validationUserPassModel();
        }
    }
}