<?php

namespace app\controllers\admin;

use vendor\core\base\View;

class UserController extends AppController
{
    public function indexAction()
    {
        $this->layout = 'default';

        View::setMeta('Главна', '', '');
        $test = 'test text';
        $data = ['one', 'two'];

       /* $this->set([
            'test' => $test,
            'data' => $data
        ]);*/

        $this->set(compact('test', 'data'));
    }

    public function testAction()
    {
        $this->layout = 'admin';

        echo  __METHOD__;
    }
}