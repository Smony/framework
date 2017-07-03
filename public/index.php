<?php 

	use vendor\core\Router;
	use vendor\core\App;

	require '../vendor/libs/function.php';

	 $url = rtrim($_SERVER['QUERY_STRING'], '/');

	 define('DEBUG', 0);
	 define('BASE_URL', baseURL());
	 define('WWW', __DIR__);
	 define('CORE', dirname(__DIR__) . '/vendor/core');
	 define('ROOT', dirname(__DIR__));
	 define('APP', dirname(__DIR__) .'/app');
	 define('LIBS', dirname(__DIR__) .'/vendor/libs');
	 define('CACHE', dirname(__DIR__) .'/temp/cache');
	 define('LAYOUT', 'default');

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
	
	//defaults routes
	Router::add('^$', ['controller' => 'welcome', 'action' => 'index']);
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');	
	
	Router::dispatch($url);
