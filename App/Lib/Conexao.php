<?php 

class Conexao {

public static $conn;

public function __construct(){ // Construtor da classe

}

public static function getConexao(){
    
    define('DBHOST','root');
    define('DBSENHA',"");

    if(!isset($conn)){
        self::$conn = new PDO('mysql:localhost;dbname=mvc',DBHOST,DBSENHA);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//ATRIBUTO DE RELATORIO DE ERROS EXCEÇÕES.
    }

    return self::$conn;
}

}


?>