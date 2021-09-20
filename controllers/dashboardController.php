<?php

namespace Controllers;

class DashboardController extends SessionController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function render(){
        $this->view->renderView("admin/index");
    }

    public function close()
    {
        $this->session->closeSession();
        header('Location:'.URL,true,301);
    }
}