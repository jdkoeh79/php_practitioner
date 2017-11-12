<?php 

namespace App\Core;

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

			return $this->callAction(
				// the ... takes a varying number of arguments and puts them into an array (called a Splat operator)
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

	}


	protected function callAction($controller, $action)
	{
		$controller = "App\\Controllers\\{$controller}";

		$controller = new $controller;

		if (! method_exists($controller, $action)) {
			throw new \Exception(
				"{$controller} does not respond to the {$action} action."
			);
		}

		return $controller->$action();
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
