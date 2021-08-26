# LIGHT-FRAMEWORK
Framework ligero y genérico de php

El objetivo de la publicación de este proyecto es proporcionar un ambiente de trabajo elaborado con el patrón de arquitectura MVC (Modelos, Vistas y Controladores); mas allá de que el desarrollador lo pueda considerar un "framework" o no.

Este proyecto no cuenta con un motor de Plantillas; 
en el proyecto no hay impedimento de incorporar su propio motor de plantillas, la lógica para hacerlo esta a cargo de la persona que lo quiera implementar.
Por otro lado, existe la posibilidad de realizar bucles, recorrido de datos y validaciones pequeñas en la vista (directorio 'views/'); y se recomienda
no aplicar lógica de negocios dentro de las vistas para conservar la seguridad que proporciona el patrón en el que se basa.

## --¿Como inicia el proyecto?--
A través del archivo .htaccess en la raiz, aplicamos condicionales para redireccionar las solicitudes ingresadas luego del dominio 'localhost/ligth-framework/...'
todas estas solicitudes viajan al archivo index.php de la raiz. 

```
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l
RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]

Options All -Indexes

ErrorDocument 403 <h1>404</h1>
```
#### INDEX.PHP
El cual llama los archivos requeridos para el funcionamiento del framework, entre ellos el archivo que contiene
la clase estática Router. Dicho clase evalua la solicitud GET que le proporciono .htaccess (en este caso se denomino a la variable como $_GET['url'])
```
error_reporting(E_ALL);

ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE);


require_once ('config/config.php');


ini_set('error_log', _DIR_LOGS_);

require_once ('libs/session.php');
require_once ('libs/database.php');
require_once ('libs/controller.php');

require_once ('controllers/sessionController.php');
require_once ('libs/view.php');
require_once ('libs/model.php');

require_once ('libs/router.php');
require_once ('libs/routes.php');

Router::start();
```
#### Router.php
La clase Router tiene como propiedad un array de elementos, donde la key del elemento será la ruta ingresada por el usuario en la URL.
```
localhost/light-framework/home/
```
'home' vendría a ser la key en la propiedad $routes = [ 'home' => ? ]
Y el valor de aquella key vendría a ser el archivo *.php que actuará como Controlador.
```
$routes = ['home'=>'homeController']
```
Este array ` $routes=[] ` será llenado por el archivo 'routes.php'.
La lógica implementada en Router.php es que evalúe la url ingresada por el usuario, esta url es la key de uno de los elementos 
de la propiedad $routes; evalua si no se a ingresado ninguna url
```
$url = isset($_GET["url"]) ? $_GET["url"] : null;
		
		if (empty($url)) {

			$fileName="controllers/homeController.php";
			require_once ($fileName);
			$controlador=new HomeController();
			
			$controlador->render('index');
			return false;
		}
```
Si no hay nada ingresado, quiere decir que estamos en la ruta raíz 'localhost/light-framework';
por lo tanto el ruteador ejecuta un controlador 'homeController.php' con un método 'render' por defecto
En caso de que encuentre como valor de la key algo como 'homeController/sayHello', el ruteador considerará como el archivo controlador
a homeController.php y a sayHello como su método
```
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
        
          //Ejecutar el método
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
```
#### ROUTES.PHP
Este archivo tiene como unica finalidad llenar la propiedad tipo array de Router.php
```
//Initial Pages
Router::addRoute('','homeController');
Router::addRoute('home','homeController');
Router::addRoute('sobre-nosotros','homeController/renderAbout');
Router::addRoute('nuestros-servicios','homeController/renderServices');
```
Cada vez que se defina una nueva vista o nueva ruta es necesario declararla en este archivo, sino se redireccionará a la vista 404

#### VIEWS.PHP
El archivo views.php contiene una clase, los métodos de esta clase estan declarados con la finalidad de interactuar solamente con la vista y los archivos ubicados en el directorio 'views/'; tiene un método para renderizar la vista que es el siguiente
```
function renderView($nombre)
    {

        require('views/'.$nombre.'.php');
        
    }
```
Y consiguiente a esto tambipen contiene métodos para el renderizado del header y el footer.
Se separaron estos métodos para la posibilidad de cambiar las etiquetas meta
```
function renderHeader($meta=[]){
        $this->meta = $meta;
        require_once('views/header.php');
    }
    
    function renderFooter(){
            require_once('views/footer.php');
    }
```

####MODEL.PHP
Clase modelo de la cual heredarán las demás clases modelos para el manejo de los datos, esta clase solo se dedica a instanciar un modelo según el nombre del archivo
pasado como parámetro
```
class Model
{
    function __construct()
    {

    }

    function loadModel($nombre)
    {
        require_once("models/".$nombre."Model.php");
        $nombre = $nombre."Model";
        $model = new $nombre();
        return $model;
    }
}
```
#### CONTROLLER.PHP
Esta clase es el controlador padre del cual heredarán los demás.
En su método constructor instancia por defecto las clases View y Model.
Por lo que sus clases hijas no tendrán la necesidad de instanciarlas solo llamarlas para su uso.

En la clase Padre Controller
```
class Controller
{
    function __construct()
    {
        /**Instanciando clase padre View() ***/
        $this->view = new View();

        
        //Intanciando clase padre Model()
        $this->model = new Model();
        
        //Validando método  HTTP
        $this->method = $_SERVER['REQUEST_METHOD'];

        //$this->view->isSpa = $this->isSpa();
        
    }


```
En la clase hija, haciendo uso de las instancias View y Model
```
class EmailController extends Controller{


    public function __construct()
    {
        parent::__construct();
    }

    public function render(){
        $this->view->renderHeader([
            "LightFramework",
            "This is a meta description for this URL",
            "keywords, LightFramework"
        ]);
        $this->view->renderView('home/contacto');
        $this->view->renderFooter();
    }

```
```
<?php
class UserController extends Controller{


    public function __construct()
    {
        parent::__construct();    
    }

    public function getUser($params){
        
        if($this->method=='POST'){
            $id=$params[0];
            $userModel = $this->model->loadModel("user");
            $res = $userModel->getById($id);
            
            echo json_encode($res);
        }
    }
```
