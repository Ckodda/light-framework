# LIGHT-FRAMEWORK
Framework ligero y genérico de php

El objetivo de la publicación de este proyecto es proporcionar un ambiente de trabajo elaborado con el patrón de arquitectura MVC (Modelos, Vistas y Controladores); mas allá de que el desarrollador lo pueda considerar un "framework" o no.

Este proyecto hace uso del motor de plantillas Smarty 3.
no aplicar lógica de negocios dentro de las vistas para conservar la seguridad que proporciona el patrón en el que se basa.

## --¿Como inicia el proyecto?--
A través del archivo .htaccess en la raiz, aplicamos condicionales para redireccionar las solicitudes ingresadas luego del dominio 'localhost/ligth-framework/...'
todas estas solicitudes viajan al archivo index.php de la raiz. 

```
RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ index.php/$1 [L]
Options All -Indexes

ErrorDocument 403 <h1>404</h1>
```
---
Para el Ruteamiento se ha hecho uso de una Librería llamada php-router
Derechos reservados a Emilio autor del repositorio https://github.com/emilio/php-router
--- 

##La version dev-v2.0
NO CUENTA CON MOTOR DE PLANTILLAS, pero mantiene el patrón
y añade una nueva funcionalidad para precargar las clases
cuando se requieran con la clase Loader en autoload.php 
```
use {directorio}\{clase}

namespace {directorio_actual_de_la_clase}
-----------
-> supongamos que existe una clase en el directorio 'models/'

namespace Models;

class MyClass{
    /*****/
}

-> Al momento de usarlo en otra clase 
use Models\MyClass;

```