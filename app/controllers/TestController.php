<?php 

namespace app\controllers;

use app\models\Main;
use R;
use vendor\core\App;
use vendor\core\base\View;

class TestController extends AppController {

	public function indexAction()
	{
		$model = new Main();
		R::fancyDebug(TRUE);
		
		$posts = R::findAll($model->table);

		$this->set(compact('posts'));
	}

	public function postAction($id)
	{
		$model = new Main();
		R::fancyDebug(TRUE);

		$post = R::findOne($model->table, "id = {$id}");

		dd($post);

		$this->set(compact('post'));
	}

}