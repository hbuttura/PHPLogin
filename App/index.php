<?php

require_once "./Controller/LoginController.php";
require_once "./Controller/RegisterController.php";
require_once "./Controller/UsuarioController.php";

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
    case '/usuario':
        $_SESSION["permissao"] = "N";
        session_start();
        if ($_SESSION["permissao"] == "S"){
            UsuarioController::ViewScreen();
            break;
        } else {
            return header("Location: /login/form");
        }
    case '/usuario/excluir-conta':
        UsuarioController::DeleteAccount();
    default:
        LoginController::ViewLoginForm();
        break;
}