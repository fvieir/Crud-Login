<?php

class Controller {

    public function CarregarTemplate(){

        require 'View/Template,php';

    }

    public function CarregarViewNoTemplate($dadosView){

        require 'View/'.$dadosView.'/.php';

    }

}