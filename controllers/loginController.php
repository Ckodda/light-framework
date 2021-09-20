<?php

namespace Controllers;

use Models\UserModel;

class LoginController extends SessionController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render(){
        $this->view->renderView('login');
    }

    public function init(){
        if($this->method=='POST'){
            $model = new UserModel();
            $model->setEmail($this->getPost('txtEmail'));
            $model->setPassword($this->getPost('txtPassword'));
            $rs = $model->authenticate();
            if($rs>0){

                $this->session->setUserSessionName($rs['role']);
                $this->session->setUserAlias($rs['name']);
                $this->session->setUserSessiontemp(date("Y-n-j H:i:s"));
                if($rs['role']=='admin'){
                    header('Location: '.URL."dashboard/");
                }else if($rs['role']=='user'){
                    header('Location: '.URL."home-user/");
                }
                exit();

            }elseif ($rs==0 || $rs>1){
                header('Location: '.URL."login/",TRUE,301);
            }
            echo json_encode($rs);
        }
        else if($this->method=='GET'){
            $this->render();
        }

    }
}