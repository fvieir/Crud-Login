<?php

class logoutController extends Controller 
{
  public function index() 
  {
    session_start();

    if($_SESSION['logado']){

     unset($_SESSION['logado']);
     unset($_SESSION['nome']);
    
     header("Location: home.php");

    }

  }
}