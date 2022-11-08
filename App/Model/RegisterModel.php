<?php

class RegisterModel {
    public $id, $user, $pass1, $pass2;

    public function validationUserPassModel()
    {
        include "./DAO/RegisterDAO.php";
        $dao = new RegisterDAO();
        $dao->validationUserPass($this);
    }
}