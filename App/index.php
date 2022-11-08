<?php

require_once "./Controller/LoginController.php";
require_once "./Controller/RegisterController.php";

$uriParse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uriParse) {
    case '/login/form':
        LoginController::ViewLoginForm();
        break;
    case '/login/validation':
        LoginController::ValidateLogin();
        break;
    case '/register/form':
        RegisterController::ViewRegisterForm();
        break;
    case '/register/validation':
        RegisterController::ValidateRegister();
        break;
    default:
        LoginController::ViewLoginForm();
        break;
}