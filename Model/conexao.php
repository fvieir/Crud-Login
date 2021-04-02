<?php

// Classe depois sera criada dentro do diretorio Lib
class Conexao {

    public static $instance; //Varial public static para ser chamado em qualquer parte do codigo sem precisar usar new

    private function __construct(){} // Para bloquear que seja feita varias conexao em varias partes do codigo

    public function getInstance(){

        if (!isset(self::$instance)) { // Se não tiver conexão, fara uma conexao

            try{
            self::$instance = new PDO('mysql:host=localhost;dbname=projeto_mvc','root','');
           // self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_);
            }catch(Exception $e){
                echo "Erro".$e;
            }
        }
        return self::$instance;
    }

}