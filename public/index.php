<?php
	session_start();

	use vendor\core\Router;
	use vendor\core\App;

	require '../vendor/libs/function.php';

	 $url = rtrim($_SERVER['QUERY_STRING'], '/');

	 define('DEBUG', 1);
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

//	Router::add('^test/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',['controller'=>'Test']);
//	Router::add('^test/(?P<alias>[a-z-]+)$',['controller'=>'Test', 'action' => 'post']);
	Router::add('^test/post/(?P<post>[a-z-]+)', ['controller' => 'Test', 'action' => 'post']);

	//DEFAULTS ROUTES
	//admin
	Router::add('^admin$',['controller'=>'User', 'action'=>'index', 'prefix' => 'admin']);
	Router::add('^admin/?(?<controller>[a-z-]+)/?(?<action>[a-z-]+)?$', ['prefix' => 'admin']);
	//site
	Router::add('^$', ['controller' => 'Mobile', 'action' => 'index']);
	Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');	
	
	Router::dispatch($url);