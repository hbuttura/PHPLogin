<?php

class RegisterController {
    public static function ViewRegisterForm(){
        include "./Model/RegisterModel.php";
        $model = new RegisterModel();
        include "./View/Register/FormRegister.php";
    }

    public static function ValidateRegister(){
        include "./Model/RegisterModel.php";
        $model = new RegisterModel();
        $user = $model->user = $_POST['user'];
        $pass1 = $model->pass1 = $_POST['pass1'];
        $pass2 = $model->pass2 = $_POST['pass2'];
        if (empty($user) || empty($pass1) || empty($pass2)) {
            header('Location: /register/form');
            exit();
        } else {
            $model->validationUserPassModel();
        }
    }
}