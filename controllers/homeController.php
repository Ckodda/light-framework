<?php
use Controller\Class\Controller;
class HomeController extends Controller{

    public function __construct()
    {
        parent::__construct();
    }
    public function render()
    {
        $this->view->renderHeader([
            "LightFramework",
            "This is a meta description for this URL",
            "keywords, LightFramework"
        ]);
        $this->view->renderView('home/index');
        $this->view->renderFooter();
    }

    public function hello($name,$years){
        echo "Hello ".$name." you are ".$years." years old";
    }

    public function goodBye($name,$years){
        echo "See you ".$name." on ".$years." years";
    }
}
?>