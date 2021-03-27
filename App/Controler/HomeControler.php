<?php

class HomeControler 
{
	function painel(){
		require "App/View/painel.php";
	}

	function login(){
		require "App/Controler/LoginControler.php";
	}

}

?>