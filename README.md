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