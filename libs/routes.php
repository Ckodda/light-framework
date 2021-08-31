<?php
$router  = new Router\Router('/'.PROJECT_NAME);
$router->add('/',function(){
    require 'controllers/homeController.php';
    $homeController  = new HomeController();
    $homeController->render();
});
$router->add('/say-hello/([a-zA-Z]+)-([0-9]+)',function($name,$years){
    require 'controllers/homeController.php';
    $homeController = new HomeController();
    $homeController->hello($name,$years);
});
$router->add('/(.*)', function() {
    require 'controllers/errorsController.php';
    $errorsController = new ErrorsController();
    $errorsController->render();
});
$router->route();
?>