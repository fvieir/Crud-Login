<?php

class loginController extends Controller 
{
  public function index ()
  {
    // Verifica se clicou no botão de login
    $sendlogin = filter_input(INPUT_POST, 'sendLogin', FILTER_SANITIZE_STRING);
    if (isset($sendlogin))
    {
      // Amazena em variavel os valores passados pelo POST
      $usuario = filter_input(INPUT_POST, 'usuario',FILTER_SANITIZE_STRING);
      $senha =  $_POST['senha'];

      // Verifica se os campos usuario e senha estão vazios, se tiver não deixar logar
      if (empty($usuario) || empty($senha)) {
        session_start();
        $_SESSION['msg'] = "<div class='alert alert-danger'>É necessário preencher senha e login!</div>";
        header("Location: homeController.php");
      
      // Verifica se usuario esta cadastrado no banco de dados e instancia um objeto.
      } else {
        $cmd = new LoginModel();
        $dados = $cmd->getLogin($usuario, $senha);
  
          if ($dados['nome'] == $_POST['usuario'] && $dados['senha'] == $_POST['senha']) 
          {
            // criar uma sessão ao logar.
            session_start();
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['logado'] = true;
           
            // Carrega o template se passar pela validação
            $this->CarregarTemplate('homeAutenticada',$dados);
          } else {
            session_start();
            $_SESSION['msg'] = "<div class='alert alert-danger'> Usuario ou senha não cadastrados! </div>";
            header("Location: homeController.php");
          }
      }
    } else {
      session_start();
      $_SESSION['msg'] = "<div class='alert alert-danger'> Página não encontrada! </div>";
      header("Location: homeController.php");
    }
  }
  
 
}