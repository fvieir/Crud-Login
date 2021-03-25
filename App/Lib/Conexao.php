<?php 

$usuario = "root";
$senha = "";

try{
    $conn = new PDO('mysql:host=localhost;dbname=mvc', $usuario, $senha);
    $con->setAtributes(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCPETION);
} catch { 
    if (PDOException $e) {
        echo 'ERROR:'.$e->getMessage();
    }
}
?>