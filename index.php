<?php 

$database = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require Router::load('routes.php')
	->direct($uri);

/*
|--------------------------------------------------------------------------
| The above two lines could also be written like so:
|--------------------------------------------------------------------------
| $router = Router::load('routes.php');
| require $router->direct($uri);
|
*/