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
//		R::fancyDebug(TRUE);
		
		$posts = R::findAll($model->table);

		$this->set(compact('posts'));
	}

	public function postAction($param = '')
	{
		$this->param = intval($_GET['id']);

		formatstr($this->param);

		$model = new Main();
//		R::fancyDebug(TRUE);
		$post = R::findOne($model->table, "id = {$this->param}");

		dd($this->route['action']);

		if(!$post['id'])
		{
			throw new \Exception("Страница не найдена.", 404);
		}

		View::setMeta($post->title, $post->keywords, $post->description);

		$this->set(compact('post'));
	}

}