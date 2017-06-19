<?php 
	error_reporting(-1);

	use vendor\core\Router;

	 $url = rtrim($_SERVER['QUERY_STRING'], '/'); //or REQUEST_URI
	 
	 define('WWW', __DIR__); 
	 define('CORE', dirname(__DIR__) . '/vendor/core');
	 define('ROOT', dirname(__DIR__));
	 define('APP', dirname(__DIR__) .'/app'); 

	require '../vendor/libs/function.php';
	
	dd($_GET);
	
	//controllers
	spl_autoload_register(function ($class) {
		$file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
		if(is_file($file))
		{
			require_once $file;
		}
	});
	
	//add routs
	Router::add('^articles/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Articles']);	
	Router::add('^articles/(?P<alias>[a-z-]+)$', ['controller' => 'Articles', 'action' => 'view']);	
	
	//defaults
	Router::add('^$', ['controller' => 'main', 'action' => 'index']);	
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');	
		
	dd(Router::getRoutes());
	
	Router::dispatch($url);
