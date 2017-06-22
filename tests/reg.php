<?php
	require '../vendor/libs/function.php';
	
	spl_autoload_register(function ($class) {
		$file = str_replace('\\', '/', $class) . '.php';
		if(is_file($file))
		{
			require_once $file;
		}
	});
	
	$config = [
		'components' => [
			'cache' => 'classes\Cache',
			'test' => 'classes\Test',
		],
	];


class Reg {

	protected static $objects = [];
	protected static $instance;

	public function __construct()
	{
		global $config;
		
		foreach($config['components'] as $name => $component){
			self::$objects[$name] = new $component;
		}
	}
	
	public static function instance()
	{
		if(self::$instance === null)
		{
			self::$instance = new self;
		}
		return self::$instance;
	}
	
	public function __get($name)
	{
		if(is_object(self::$objects[$name]))
		{
			return self::$objects[$name];
		}
	}
	
	public function __set($name, $value)
	{
		if(!isset(self::$objects[$name]))
		{
			self::$objects[$name] = new $value;
		}
	}
	
	public function getComponents()
	{
		echo '<pre>';
		var_dump(self::$objects);
		echo '</pre>';
	}

}

	$app = new Reg();
	$app->getComponents();
	$app->test->go();
	$app->test2 = 'classes\Test2';
	$app->getComponents();
	$app->test2->hi();
	
	//когда обращаемся к неизвестному свойству срабатывает Магической метод __get() возвращает NULL;
	// $test = $app->test;	
	// dd($test);