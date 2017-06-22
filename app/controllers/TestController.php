<?php 

namespace app\controllers;

use R;
use app\models\Test;
use app\models\City;

class TestController extends AppController {

	public function indexAction()
	{
		$this->layout = 'main';
		$model = new Test();		
		R::fancyDebug(TRUE);
		
		$data = R::findAll($model->table);		
		// $this->setMeta($test->title, $test->keywords, $test->descripton);
		// $seo = $this->meta;
		$this->set(compact('data'));
	}

}