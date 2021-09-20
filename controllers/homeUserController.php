<?php

namespace Controllers;

class HomeUserController extends SessionController
{

    public function __construct()
    {
        parent::__construct();
    }

    public  function render(){
        $this->view->renderView('home/index');
    }

    public function close()
    {
        $this->session->closeSession();
        header('Location: '.URL,TRUE,301);
    }
}