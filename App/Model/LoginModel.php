<?php

class LoginModel {
    public $iduser, $user, $pass;

    public function validationUserPassModel()
    {
        include "./DAO/LoginDAO.php";
        $dao = new LoginDAO();
        $dao->validationUserPass($this);
    }

}