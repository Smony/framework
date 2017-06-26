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
	 Router::add('^test/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Test']);
	 Router::add('^test/(?P<alias>[a-z-]+)$', ['controller' => 'Test', 'action' => 'post']);//add routs
	Router::add('^test/(?P<alias>[a-z-]+)$', ['controller' => 'Test', 'action' => 'post']);//add routs

	//defaults routes
	Router::add('^$', ['controller' => 'test', 'action' => 'index']);
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');	
	
	Router::dispatch($url);
