<?php 

namespace vendor\core;

class Registry {

	use TSingletone;

	protected static $objects = [];
//	protected static $instance;

	public function __construct()
	{	
		require ROOT . '/config/config.php';
		
		foreach($config['components'] as $name => $component){
			self::$objects[$name] = new $component;
		}
	}
	
/*	public static function instance()
	{
		if(self::$instance === null)
		{
			self::$instance = new self;
		}
		return self::$instance;
	}*/
	
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