<?php

require_once ('libs/Router/RouteNotFoundException.php');
require_once ('libs/Router/Route.php');
require_once ('libs/Router/Router.php');
$router  = new Router\Router(PROJECT_NAME);
$router->add('/',function(){
    $homeController = new Controllers\HomeController();
    $homeController->render();
});


$router->add('/say-hello/([a-zA-Z]+)-([0-9]+)',function($name,$years){

    $homeController  = new Controllers\HomeController();
    $homeController->hello($name,$years);
});


$router->add('/say-bye/([a-zA-Z]+)-([0-9]+)',function($name,$years){
    $homeController = new Controllers\HomeController();
    $homeController->goodBye($name,$years);
});

$router->add('/login/',function(){
    $loginController = new Controllers\LoginController();
    $loginController->init();
});

$router->add('/dashboard/',function(){
        $loginController = new Controllers\DashboardController();
        $loginController->render();
});

$router->add('/dashboard/([a-zA-Z]+)',function($method){
    $loginController = new Controllers\DashboardController();
    $loginController->{$method}();
});

$router->add('/home-user/',function(){
    $loginController = new Controllers\HomeUserController();
    $loginController->render();
});
$router->add('/home-user/([a-zA-Z]+)',function($method){
    $loginController = new Controllers\HomeUserController();
    $loginController->{$method}();
});
$router->add('/(.*)', function() {
    $errorsController = new Controllers\ErrorsController();
    $errorsController->setErrorCode(404);
    $errorsController->setErrorMessage("Error 404, ruta no existente");
    $errorsController->render();
});
$router->route();
?>