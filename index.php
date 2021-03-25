<?php 

require "App/Controler/HomeControler.php";

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : "index";

$ctrl = new HomeControler();

switch ($pagina) {
	case 'index':
		$ctrl->index();
		break;

	case 'login':
		$ctrl->login();
		break;

	case 'painel':
		$ctrl->painel();
		break;

}


?>