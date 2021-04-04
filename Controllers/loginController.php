<?php

class loginController extends Controller 
{
  public function index ()
  {
    $sendlogin = filter_input(INPUT_POST, 'sendLogin', FILTER_SANITIZE_STRING);
    if (isset($sendlogin))
    {
      $usuario = $_POST['usuario'];
      $senha =  $_POST['senha'];
  
      $cmd = new LoginModel();
      $dados = $cmd->getLogin($usuario, $senha);

        if ($dados['nome'] == $_POST['usuario'] && $dados['senha'] == $_POST['senha']) 
        {
          
          $this->CarregarTemplate('OrdemServico',$dados);
        }

    } else {
      session_start();
      $_SESSION['msg'] = "<div class='alert alert-danger'> Página não encontrada! </div>";
      header("Location: homeController.php");
    }
  }
}