<?php

class LoginDAO {
    private $conexao;

    function __construct() {
        $dsn = "mysql:host=localhost:3306;dbname=login_db";
        $this->conexao = new PDO($dsn, 'root', '9090');
    }

    function validationUserPass(LoginModel $model) {
        $sql = "SELECT user, pass FROM usuario WHERE user = ? AND pass = ?";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->user);
        $stmt->bindValue(2, $model->pass);

        $stmt->execute();

        if (empty($stmt->fetchObject())) {
            return header("Location: /login/form");
            session_destroy();
        } else {
            echo "SIM";
            $_SESSION["permissao"] = "S";
            return header("Location: /usuario");
            exit;
        }
    }
}