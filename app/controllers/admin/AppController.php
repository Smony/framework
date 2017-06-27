<?php

namespace app\controllers\admin;

use vendor\core\base\Controller;

class AppController extends Controller {

   public $layout = 'admin';

   public function __construct($route)
   {
       parent::__construct($route);
   }

}