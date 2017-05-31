<?php 

class Router
{
	protected $routes = [];

	public static function load($file)
	{
		// new Router
		$router = new static;

		require $file;

		return $router;
	}

	function define($routes)
	{
		$this->routes = $routes;
	}

	function direct($uri)
	{
		if (array_key_exists($uri, $this->routes)) {
			return $this->routes[$uri];
		}

		throw new Exception('No route defined for this URI.');
	}
}