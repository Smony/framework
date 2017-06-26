<?php 

	use vendor\core\Router;
	use vendor\core\App;

	 $url = rtrim($_SERVER['QUERY_STRING'], '/');

	 define('DEBUG', 1);
	 define('WWW', __DIR__);
	 define('CORE', dirname(__DIR__) . '/vendor/core');
	 define('ROOT', dirname(__DIR__));
	 define('APP', dirname(__DIR__) .'/app');
	 define('LIBS', dirname(__DIR__) .'/vendor/libs');
	 define('CACHE', dirname(__DIR__) .'/temp/cache');
	 define('LAYOUT', 'default');

	require '../vendor/libs/function.php';
	
	//controllers
	spl_autoload_register(function ($class) {
		$file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
		if(is_file($file))
		{
			require_once $file;
		}
	});
	
	new App();
	
	// add routs
	// Router::add('^articles/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Articles']);	
	// Router::add('^articles/(?P<alias>[a-z-]+)$', ['controller' => 'Articles', 'action' => 'view']);//add routs
	
	//defaults
	Router::add('^$', ['controller' => 'main', 'action' => 'index']);	
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');	
	
	Router::dispatch($url);
