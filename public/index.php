<?php 

	 $query = rtrim($_SERVER['QUERY_STRING'], '/'); //or REQUEST_URI

	require '../vendor/core/Router.php';
	require '../vendor/libs/function.php';
	
	Router::add('page', ['controller' => 'PageController', 'action' => 'index']);
	Router::add('page/show', ['controller' => 'PageController', 'action' => 'show']);
	Router::add('', ['controller' => 'MainController', 'action' => 'index']);
	
	dd(Router::getRoutes());
	
	if(Router::matchRoute($query))
	{
		dd(Router::getRoute());
	}
	else
	{
		echo '404';
	}