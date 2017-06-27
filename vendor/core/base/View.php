<?php

namespace vendor\core\base;

class View {
	
	// controller, action, parrams;
	public $route = [];
	
	//view template
	public $view;
	
	//layout template
	public $layout;
	
	public static $meta = [
		'title' => '', 
		'keywords' => '',
		'description'=> ''
	];
	
	public function __construct($route, $layout = '', $view = '')
	{
		$this->route = $route;
		
		if($layout === false)
		{
			$this->layout = false;
		}
		else
		{
			$this->layout = $layout ?: LAYOUT;
		}
		
		$this->view = $view;
	}
	
	public function render($data)
	{
		if(is_array($data))
		{
			extract($data);
		}
		
		$file_view = APP . "/views/{$this->route['prefix']}{$this->route['controller']}/{$this->view}.php";
		
		ob_start();
		
		if(is_file($file_view))
		{
			require $file_view;
		}
		else
		{
			echo "<p>Не найден View <b>{$file_view}</b></p>";
//			throw new \Exception("<p>Не найден View <b>$file_view</b></p>.", 404);
		}
		
		$content = ob_get_clean();
		
		if(false !== $this->layout)
		{
			$file_layout = APP . "/views/layouts/{$this->layout}.php";
		
			if(is_file($file_layout))
			{
				require $file_layout;
			}
			else
			{
				echo "<p>Не найден layout <b>{$file_layout}</b></p>";
//				throw new \Exception("<p>Не найден layout <b>$file_layout</b></p>.", 404);
			}
		}		
		
	}
	
	public static function getMeta()
	{
		echo '<title>' . self::$meta['title'] . '</title>
		<meta name="keywords" content="' . self::$meta['keywords'] . '"/>
		<meta name="description" content="' . self::$meta['description'] . '"/>';
	}
	
	public static function setMeta($title = '', $keywords = '', $description = '')
	{
		self::$meta['title'] = $title;
		self::$meta['keywords'] = $keywords;
		self::$meta['description'] = $description;
	}

}