<?php
require_once ('libs/Router/RouteNotFoundException.php');
require_once ('libs/Router/Route.php');
require_once ('libs/Router/Router.php');
$router  = new Router\Router('/'.PROJECT_NAME);
$router->add('/',function(){
    //Instance Object Controller
    $MasterController = new Controller();
    //Instance Child of Father Controller
    $homeController  = $MasterController->callChild('homeController');
    //Execute Method
    $homeController->render();
});


$router->add('/say-hello/([a-zA-Z]+)-([0-9]+)',function($name,$years){
    $MasterController = new Controller();
    $homeController  = $MasterController->callChild('homeController');
    $homeController->hello($name,$years);
});


$router->add('/say-bye/([a-zA-Z]+)-([0-9]+)',function($name,$years){
    $MasterController = new Controller();
    $homeController  = $MasterController->callChild('homeController');
    $homeController->goodBye($name,$years);
});

$router->add('/users',function(){
    $MasterController = new Controller();
    $homeController  = $MasterController->callChild('homeController');
    $homeController->usersList();
});

$router->add('/(.*)', function() {
    $MasterController = new Controller();
    $errorsController  = $MasterController->callChild('errorsController');
    $errorsController->render();
});
$router->route();
?>