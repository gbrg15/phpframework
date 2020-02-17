<?php

require 'core/bootstrap.php';




//$uri = trim($_SERVER['REQUEST_URI'], '/');


require Router::load('routes.php')->direct(Request::uri(), Request::method());


/*
$router = new Router();

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);
*/
