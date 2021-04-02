<?php 
require "autoload.php"; // Quando instancia um objeto o autoload.php pega a classe e carrega automatico
require "Model/Conexao.php";

Conexao::getInstance(); // chamando a conexão para testar.
$core = new Core();

?>