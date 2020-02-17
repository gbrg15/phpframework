<?php

require 'core/bootstrap.php';


$uri = Request::uri();

//$uri = trim($_SERVER['REQUEST_URI'], '/');


require Router::load('routes.php')->direct($uri);


/*
$router = new Router();

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);
*/
