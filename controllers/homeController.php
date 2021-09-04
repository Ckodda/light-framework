<?php
class HomeController extends Controller{

    public function __construct()
    {
        parent::__construct();
    }
    public function render()
    {
        $this->view->renderView('index.tpl',[['mensaje','Bienvenidos a LightFramework - este es una vista compilada por Smarty 3']]);
    }
    public function hello($name,$years){
        echo "Hello ".$name." you are ".$years." years old";
    }

    public function goodBye($name,$years){
        echo "See you ".$name." on ".$years." years";
    }
    public function usersList(){
        $usersModel = $this->model->loadModel('user');
        $users = $usersModel->getAllUsers();
        $this->view->renderView('users.tpl',[['users',$users]]);
    }
}
?>