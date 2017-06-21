<?php

namespace app\controllers;

use vendor\core\base\Controller;

class AppController extends Controller {

	public $meta = [];

	public function setMeta($title = '', $keywords = '', $description = '')
	{
		$this->meta['title'] = $title;
		$this->meta['keywords'] = $keywords;
		$this->meta['description'] = $description;
	}

}