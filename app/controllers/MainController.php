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
		$post = $model->findOne(5);// по умолчанию id
		// $post = $model->findOne('Смысл сайта', 'title');
		// $data = $model->findBySql("SELECT * FROM {$model->table} ORDER BY id DESC LIMIT 2");
		$data = $model->findBySql("SELECT * FROM {$model->table} WHERE title LIKE 'ой'");
		dd($data);
		// dd($postString);
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
		 
		 
	}

}