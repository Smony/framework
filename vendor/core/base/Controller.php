<?php 

namespace vendor\core\base;

abstract class Controller {
	
	// controller, action, parrams;
	public $route = [];
	
	//view template
	public $view;
	
	//layout template
	public $layout;
	
	//array
	public $data = [];
	
	public function __construct($route, $view = '')
	{
		$this->route = $route;
		$this->view = $route['action'];
	}
	
	public function getView()
	{
		$vObj = new View($this->route, $this->layout, $this->view);
		$vObj->render($this->data);
	}
	
	public function set($data)
	{
		$this->data = $data;
	}
	
	
}