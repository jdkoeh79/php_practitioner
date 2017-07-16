<?php 

class Router
{
	public $routes = [
		'GET' => [],
		'POST' => []
	];


	public static function load($file)
	{
		// new Router
		$router = new static;

		require $file;

		return $router;
	}


	function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {
			return $this->routes[$requestType][$uri];
		}

		throw new Exception('No route defined for this URI.');
	}


	function get($uri, $controller) 
	{
		$this->routes['GET'][$uri] = $controller;
	}


	function post($uri, $controller) 
	{
		$this->routes['POST'][$uri] = $controller;
	}
}