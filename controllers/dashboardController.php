<?php

namespace Controllers;


use Models\UserModel;

class DashboardController extends SessionController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function render(){
        $users = $this->getAllUsers();
        $aliasname = $this->session->getUserAlias();
        $this->view->renderView("admin/index",[
            "users"=>$users,
            "alias"=>$aliasname
        ]);
    }

    public function getAllUsers()
    {
        $userModel = new UserModel();
        return $userModel->getAllUsers();
    }

    public function close()
    {
        $this->session->closeSession();
        header('Location:'.URL,true,301);
    }
}