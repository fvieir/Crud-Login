<?php

require "model/Model.php";

class HomeControler 
{
	function Index(){
		echo "chamou o index";
	}

	function Login(){
		echo "chamou o login";
	}

   function Painel(){
	$model = new Model();
	$usuario = $model->listarDados();
	require "view/login.php";
	
}

}

?>