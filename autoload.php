<?php

spl_autoload_register(function($class){

    if (file_exists('Controllers/'.$class.'.php')) {
           
        require 'Controllers/'.$class.'.php';

       } elseif (file_exists('Core/'.$class.'.php')) {
           
           require 'Core/'.$class.'.php';

       } elseif (file_exists('Model/'.$class.'.php')) {
          
        require 'Model/'.$class.'.php';
       }

});

      
