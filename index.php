<?php 

require "App/Controler/HomeControler.php";

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'painel';

$ctrl = new HomeControler();

switch ($pagina) {
	case 'painel':
		$ctrl->painel();
		break;

	case 'login':
		$ctrl->login();
		break;
}

?>