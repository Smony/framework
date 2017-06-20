<?php

namespace app\controllers;

class MainController extends AppController {

	// public $layout = 'main';

	public function indexAction()
	{
		$seo = [
			'title' => 'Главная',
			'keywords' => 'ключевые слова',
			'description' => 'краткое описание страницы'
		];
		$this->set(compact('seo'));
	}
	
	public function testAction()
	{
		// $this->layout = false; //отключаем layout
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