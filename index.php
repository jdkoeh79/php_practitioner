<?php 

$database = require 'core/bootstrap.php';

require Router::load('routes.php')
	->direct(Request::uri());

/*
|--------------------------------------------------------------------------
| The above two lines could also be written like so:
|--------------------------------------------------------------------------
| $router = Router::load('routes.php');
| require $router->direct($uri);
|
*/