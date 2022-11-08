<?php

class LoginModel {
    public $id, $user, $pass;

    public function validationUserPassModel()
    {
        include "./DAO/LoginDAO.php";
        $dao = new LoginDAO();
        $dao->validationUserPass($this);
    }

}