<?php

namespace app\controllers;


class WelcomeController extends AppController
{

    public function indexAction()
    {
        $hi = "Welcome to PHP Framework";
        $this->set(compact('hi'));
    }


}