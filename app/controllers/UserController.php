<?php

namespace app\controllers;

use vendor\core\App;
use vendor\core\base\View;
use app\models\User;
use R;

class UserController extends AppController
{

    // public $layout = 'main';

    public function indexAction()
    {
        if(isset($_SESSION['is_user']))
        {
            $data = "Aвторизован";
        }
        else
        {
            $data = "не авторизован";
        }

        $this->set(compact('data'));
    }

    public function singinAction()
    {
        $data = $_POST;
        if(isset($data['do_singin']))
        {
            $model = new User();

            $user = R::findOne($model->table, 'login = ?', array($data['login']));

            #dd($user);

            if($user)
            {
                if($data['password'] == $user->password)
                {
                    dd('Вы успешно Ввошли');

                    $_SESSION['is_user'] = $user;

                    dd( $_SESSION['is_user']->email);
                    dd( $user);
                    #header("Location: /user/index");
                    #die();
                }
                else
                {
                    dd('Введите правельный пароль');
                }
            }
            else
            {
                dd('Польлзователь не найден');
            }

        }

        View::setMeta('Вхід для членів клубу, Вірші, поезія. Клуб поезії',
            'вірші, поезія, клуб поезії, вірші про кохання, листівки і вірші, молоді поети, розмістити вірш, вірші, поезія, українські поети, власна творчість, творчість, бібліотека поезії, чат поетів, TOP поетів, TOP поетів, Євген Юхниця, клуб поезії Євген Юхниця',
            'Вірші Поезія - клуб Поезії. Вірші. Вірші про кохання. Вірші всім.');

    }

    public function singupAction()
    {
        $data = $_POST;
        if(isset($data['do_singup']))
        {
            $model = new User();

            $user = R::dispense($model->table);
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->repassword = $data['repassword'];
            R::store($user);
            header("Location: /user/index");
            die();
        }

        View::setMeta('Регистрация','','');
    }

    public function logoutAction()
    {
        $this->layout = false;
        unset($_SESSION['is_user']);
        #dd($this->route);

        header("Location: /user");
        die();
    }

}