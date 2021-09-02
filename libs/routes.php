<?php
require_once ('libs/Router/RouteNotFoundException.php');
require_once ('libs/Router/Route.php');
require_once ('libs/Router/Router.php');
require_once ('libs/controller.php');
$router  = new Router\Router('/'.PROJECT_NAME);
$router->add('/',function(){
    //Instance Object Controller
    $MasterController = new Controller\Class\Controller;
    //Instance Child of Father Controller
    $homeController  = $MasterController->callChild('homeController');
    //Execute Method
    $homeController->render();
});


$router->add('/say-hello/([a-zA-Z]+)-([0-9]+)',function($name,$years){
    $MasterController =new Controller\Class\Controller;
    $homeController  = $MasterController->callChild('homeController');
    $homeController->hello($name,$years);
});


$router->add('/say-bye/([a-zA-Z]+)-([0-9]+)',function($name,$years){
    $MasterController = new Controller\Class\Controller;
    $homeController  = $MasterController->callChild('homeController');
    $homeController->goodBye($name,$years);
});


$router->add('/(.*)', function() {
    $MasterController = new Controller\Class\Controller;
    $errorsController  = $MasterController->callChild('errorsController');
    $errorsController->render();
});
$router->route();
?>