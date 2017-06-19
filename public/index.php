<?php 

	 $query = rtrim($_SERVER['QUERY_STRING'], '/'); //or REQUEST_URI
	 
	 define('WWW', __DIR__); // site/public
	 define('CORE', dirname(__DIR__) . '/vendor/core'); // site/vendor/core
	 define('ROOT', dirname(__DIR__)); // site
	 define('APP', dirname(__DIR__) .'/app'); // site/add

	require '../vendor/core/Router.php';
	require '../vendor/libs/function.php';
	
	//controllers
	spl_autoload_register(function ($class) {
		$controller = APP ."/controllers/$class.php";
		if(is_file($controller))
		{
			require_once $controller;
		}
	});

	//article/index = page-new/index
	Router::add('^article/?(?P<action>[a-z-]+)?$', ['controller' => 'page-new', 'action' => 'index']);	
	
	//defaults routs
	Router::add('^$', ['controller' => 'main', 'action' => 'index']);	
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');	
		
	dd(Router::getRoutes());
	
	Router::dispatch($query);
