<?php 

require_once "App/Model/Login.php";

class LoginControler {

    public function listar (){

        $login = new Login();
        $login->ListarUsuario();

        $_REQUEST['login'] = $login;
        require "App/View/login.php";
    }

}


?>