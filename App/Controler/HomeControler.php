<?php


class HomeControler 
{
	function index(){
		echo "chamou o index";
	}

	function login(){
		require "App/View/login.php";
	}

   function painel(){
		echo"login";
	}

}

?>