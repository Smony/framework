<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Articles extends Controller {
	
	public function viewAction()
	{
		dd($this->route);
		dd($_GET);

		echo 'Articles::view';
	}

}