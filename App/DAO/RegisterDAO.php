<?php

class RegisterDAO{
    private $conexao;

    function __construct() {
        $dsn = "mysql:host=localhost:3306;dbname=login_db";
        $this->conexao = new PDO($dsn, 'root', '9090');
    }

    function validationUserPass(RegisterModel $model) {
        $sql = "SELECT user, pass FROM usuario WHERE user = ? AND pass = ?";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->user);
        $stmt->bindValue(2, $model->pass1);

        $stmt->execute();

        if (empty($stmt->fetchObject())) {
            $sql = "INSERT INTO usuario VALUES (DEFAULT, ?, ?)";
            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->user);
            $stmt->bindValue(2, $model->pass1);

            $stmt->execute();
            return header("Location: /login/form");
        } else {
            return header("Location: /register/form");
        }
    }
}