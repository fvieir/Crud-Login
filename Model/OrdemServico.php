<?php
//require "Model/Conexao.php";

class OrdemServico {

    public function cadastrar($codigo,$tag,$tipman,$setexe,$resp,$aplic,
                                $estado,$cidade,$empresa,$filial,$regserv){  
        
        $sql = "INSERT INTO ordemservico (TAG,TIPMAN,SETEXE,RESP,APLIC,ESTADO,CIDADE,EMPRESA,FILIAL,REGSERV) 
        VALUES ('".$tag."','".$tipman."','".$setexe."','".$resp."','".$aplic."','".$estado."','".$cidade."',
            '".$empresa."','".$filial."','".$regserv."') "; 

        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        if($con->rowCount() == 1){
            return true;
        } else {
            throw new Exception("Erro ao cadastrar OS.");
            
            return false;
        }
    }

    public function numeroAutomatico(){

        // Gera um numero automatico
        $sql = "SELECT max(id) +1 as codigo FROM login";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        $dados = $con->fetch();
        return $dados;
    }


    public function listar(){
       
        $sql = "SELECT * FROM ordemservico ORDER BY CODOR DESC";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        if ($con->rowCount() == 0) {
    
            throw new Exception("Erro ao listar OS.");
        } 

        $dados = $con->fetchall(PDO::FETCH_ASSOC);
        return $dados;
        
    }
}