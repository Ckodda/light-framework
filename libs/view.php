<?php

class View
{
    public $meta= [];

    function __construct()
    {
        
    }

    function renderView($nombre)
    {

        require('views/'.$nombre.'.php');
        
    }

    function renderHeader($meta=[]){
        $this->meta = $meta;
        require_once('views/header.php');
    }
    
    function renderFooter(){
            require_once('views/footer.php');
    }
    
    function isAjaxRequestToSpa(){
        //This function is enabled for JQuery 
        if(
            isset($_SERVER ['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'
            // !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            // strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
         ){
            # Ejecuta si la petición es a través de AJAX.
            return true;
         }else{
            # Ejecuta si la petición NO es a través de AJAX.
            return false;
        }
    }
}
?>