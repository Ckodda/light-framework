<?php
require 'controllers/errorsController.php';

class Router{

	public static $routes = [];
	
	public static function addRoute($_r,$_c){
		self::$routes+=[$_r=>$_c];
	}

    public static function start(){
		$url = isset($_GET["url"]) ? $_GET["url"] : null;
	    
		$url = rtrim($url, "/");

		$url = explode("/", $url);
		
		if (empty($url[0])) {

			$fileName="controllers/homeController.php";
			require_once ($fileName);
			$controlador=new HomeController();
			
			$controlador->render('index');
			return false;
		}
		if(isset(self::$routes[$url[0]])){
				
				$rout = explode('/',self::$routes[$url[0]]);

				$fileName = "controllers/" . $rout[0] .".php";
		}
	
		if(isset($fileName))
		{
			//Incluir el archivo del controlador
			require_once($fileName);
			//Instanciar el CONTROLADOR
		
			$nameController = $rout[0];
			$controller = new $nameController;

			//Invocar al METODO
			if(isset($rout[1])){
				//si existe el metodo(funcion) en el controlador
				if(method_exists($controller,$rout[1]))
				{
					$controller->{$rout[1]}();

				}else{
					$controlador = new ErrorsController();
					$controlador->render();
					//error no existe el metodo
					//$controlador = new ErroresController();
					//$controlador->render("");
				}

			}else{
				$controller->render();
			}
		}
		else
		{
			
			$controlador = new ErrorsController();
			$controlador->render();
//			$controlador->mostrarVista();

		}
	}
}
?>