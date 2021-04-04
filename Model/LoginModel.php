<?php

class LoginModel {

    public function getLogin($usuario, $senha){  

        $sql = "SELECT nome, senha FROM login WHERE nome = :nome AND senha = :senha";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome",$usuario);
        $con->bindValue(":senha",$senha);
        
        $con->execute();

        $resul = $con->fetch(PDO::FETCH_ASSOC);

        return $resul;

    }

}