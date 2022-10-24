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
        $user = $model->user = $_POST['user'];
        $pass = $model->pass = $_POST['pass'];
        if (empty($user) || empty($pass)) {
            header('Location: /login/form');
            exit();
        } else {
            $model->validationUserPassModel();
        }
    }
}