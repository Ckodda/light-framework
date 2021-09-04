<?php
require_once ('Smarty/libs/Smarty.class.php');
class View
{
    public $meta= [];

    function __construct()
    {
        
        $this->smarty = new Smarty();
        $this->smarty->template_dir = "./views.smarty";
        //$smarty->config_dir = "./configs";
        $this->smarty->cache_dir = "./cache";
        $this->smarty->compile_dir = "./views.compiled";
    }

    function renderView($nombre,$data=[])
    {
        $this->smarty->assign('URL',URL);
        foreach($data as $d){
            $this->smarty->assign($d[0],$d[1]);
        }
        $this->smarty->display($nombre);   
    }

    function renderHeader($meta=[]){
        $this->meta = $meta;
        //require_once('views/header.php');
    }
    
    function renderFooter(){
        //require_once('views/footer.php');
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