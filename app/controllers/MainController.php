<?php

namespace app\controllers;

use R;

use app\models\Main;

class MainController extends AppController {

	// public $layout = 'main';

	public function indexAction()
	{
		$model = new Main();
		$seo = [
			'title' => 'Главная',
			'keywords' => 'ключевые слова',
			'description' => 'краткое описание страницы'
		];
		
		$posts = R::findAll($model->table);
		$post = R::findOne($model->table, 'id = 2');
		
		$this->set(compact('seo', 'posts', 'post'));
	}
	
	public function testAction()
	{
		// $this->layout = false; //отключаем layout
		 $this->layout = 'main';
		 
		 
	}

}