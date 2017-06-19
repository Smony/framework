<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Main extends Controller {
	
	public function indexAction()
	{
		echo 'Main::index';
	}

	public function testAction()
	{
		echo 'Main::test';
	}

}