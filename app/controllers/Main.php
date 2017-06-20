<?php

namespace app\controllers;

class Main extends App {

	// public $layout = 'main';

	public function indexAction()
	{

	}
	
	public function testAction()
	{
		//$this->layout = false; //отключаем layout
		 $this->layout = 'main';
		 
		 $name = 'Smony';
		 $hi = 'Hello';
		 $corols = [
			'silver' => '#ccc',
			'red' => 'red'
		 ];
		 
		 // $this->set(['name' => $name, 'hi' => 'Hello']);
		 $this->set(compact('name', 'hi', 'corols'));
		
	}

}