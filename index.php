<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php';

require Router::load('routes.php')
	->direct(Request::uri(), Request::method());

/*
|----------------------------------------------------
| The above two lines could also be written like so:
|----------------------------------------------------
| $router = Router::load('routes.php');
| require $router->direct($uri);
|
*/