<?php

class Router {
	
	public function __construct () {
		
	}

	protected static $routes = [];
	protected static $route = [];

	public static function add($reqexp, $route = [])
	{
		self::$routes[$reqexp] = $route;
	}
	
	public static function getRoutes() { return self::$routes; }	
	public static function getRoute() { return self::$route; }
	
	// ищет URL в таблицы маршутов
	public static function matchRoute($url)
	{
		foreach(self::$routes as $pattern => $route)
		{
			if(preg_match("#$pattern#i", $url, $matches))
			{
				foreach($matches as $k => $v)
				{
					if(is_string($k))
					{
						$route[$k] = $v;
					}
				}
				if(!isset($route['action']))
				{
					$route['action'] = 'index';
				}
				self::$route = $route;
				return true;
			}
		}
		return false;
	}
	
	//перенаправляет URL по корректному маршуту
	public static function dispatch($url)
	{
		if(self::matchRoute($url))
		{
			$controller = self::upperCamelCase(self::$route['controller']);
			if(class_exists($controller))
			{
				$cObj = new $controller;
				$action = self::lowerCamelCase(self::$route['action']) . 'Action';
				if(method_exists($cObj, $action))
				{
					$cObj ->$action();
				}
				else
				{
					echo "Метод <b>$controller::$action</b> не найдет.";
				}
			}
			else
			{
				echo "Контролер <b>$controller</b> не найдет.";
			}
		}
		else
		{
			http_response_code(404);
			include('404.html');
		}
	}
	
	protected static function upperCamelCase($name)
	{	
		return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
	}
	protected static function lowerCamelCase($name)
	{	
		return lcfirst(self::upperCamelCase($name));
	}
	
}
	