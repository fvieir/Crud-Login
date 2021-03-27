<?php 

class Conexao {

public static $conn;


public function __construct(){ // Construtor da classe

}

public static function getInstance(){
    
    define('DBHOST','rot');
    define('DBSENHA',"");

    if(!isset($instance)){
        self::$instance = new PDO('mysql:localhost;dbname=mvc',DBHOST,DBSENHA, 
    array(PDO::ATTR_INIT_COMMAND => "SET NAMES utf8"));
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//ATRIBUTO DE RELATORIO DE ERROS EXCEÇÕES.
    }

    return self::$instance;
}

}


?>