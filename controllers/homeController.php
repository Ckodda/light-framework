<?php
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

    public function hello(){
        echo "Este es el método hello";
    }
}
?>