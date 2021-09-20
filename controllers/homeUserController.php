<?php

namespace Controllers;

class HomeUserController extends SessionController
{

    public function __construct()
    {
        parent::__construct();
    }

    public  function render(){
        $alias = $this->session->getUserAlias();
        $this->view->renderView('home/index',[
            'alias'=>$alias
        ]);
    }


    public function close()
    {
        $this->session->closeSession();
        header('Location: '.URL,TRUE,301);
    }
}