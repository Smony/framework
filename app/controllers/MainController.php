<?php

namespace app\controllers;

use R;

use app\models\Main;

class MainController extends AppController {

	// public $layout = 'main';

	public function indexAction()
	{
		$model = new Main();
	
		$posts = R::findAll($model->table);
		$post = R::findOne($model->table, 'id = 5');
		$meta = R::findOne($model->table, 'id = 2');
		
		$this->setMeta($meta->title, $meta->keywords, $meta->description);
		$seo = $this->meta;

		$this->set(compact('seo', 'posts', 'post'));
	}
	
	public function testAction()
	{
		// $this->layout = false; //отключаем layout
		 $this->layout = 'main';
		 	 
	}

}