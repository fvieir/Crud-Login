<?php
//require "Model/Conexao.php";

class OrdemServico {

    public function cadastrar(){  
    
    }

    public function numeroAutomatico(){

        // Gera um numero automatico
        $sql = "SELECT max(id) +1 as codigo FROM login";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        $dados = $con->fetch();
        return $dados;
    }

}