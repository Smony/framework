<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController {

	// public $layout = 'main';

	public function indexAction()
	{
		$model = new Main();
		// $data = $model->query("CREATE TABLE posts2 SELECT * FROM posts");
		$posts = $model->findAll();
		$posts2 = $model->findAll();
		$posts3 = $model->findAll();
		// dd($posts);
		$seo = [
			'title' => 'Главная',
			'keywords' => 'ключевые слова',
			'description' => 'краткое описание страницы'
		];
		
		$this->set(compact('seo', 'posts'));
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