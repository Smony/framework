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
            header("Location: /user/singin");
            die();
        }

        $this->set(compact('data'));
    }

    public function singinAction()
    {
        $model = new User();
        $data = $_POST;
        if(isset($data['do_singin']))
        {
            $errors = '';
            $user = R::findOne($model->table, 'email = ?', array($data['email']));
            if($user)
            {
                if(password_verify($data['password'], $user->password))
                {
                    $_SESSION['is_user'] = $user;
                    header("Location: /user/index");
                    die();
                }
                else
                {
                    $errors = 'Введите правельный пароль';
                }
            }
            else
            {
                $errors = 'Польлзователь не найден';
            }
        }

        View::setMeta('Вхід для членів клубу, Вірші, поезія. Клуб поезії',
            'вірші, поезія, клуб поезії, вірші про кохання, листівки і вірші, молоді поети, розмістити вірш, вірші, поезія, українські поети, власна творчість, творчість, бібліотека поезії, чат поетів, TOP поетів, TOP поетів, Євген Юхниця, клуб поезії Євген Юхниця',
            'Вірші Поезія - клуб Поезії. Вірші. Вірші про кохання. Вірші всім.');

        $this->set(compact('errors'));
    }

    public function singupAction()
    {
        $model = new User();
        $data = $_POST;
        if(isset($data['do_singup']))
        {
            $errors = '';
            if(trim($data['nick']) == '')
            {
                $errors = 'Будь ласка, заповніть поле \'Псевдонім\'';
            }
            if(trim($data['email']) == '')
            {
                $errors = 'Будь ласка, вкажіть Ваш email';
            }
            if($data['password'] == '')
            {
                $errors = 'Будь ласка, заповніть поле \'Пароль\'';
            }
            if($data['rep_password'] != $data['password'])
            {
                $errors = 'Будь ласка, повторіть Ваш пароль';
            }
            if(R::count($model->table, 'email = ?', array($data['email'])) > 0)
            {
                $errors = 'Користувач з таким email\'ом вже є';
            }
            if(empty($errors))
            {
                $user = R::dispense($model->table);

                $user->nick = $data['nick'];
                $user->email = $data['email'];
                $user->password = password_hash($data['password'], PASSWORD_DEFAULT);

                R::store($user);
                header("Location: /user");
                die();
            }
            else
            {
                //dd($errors);
            }
        }

        View::setMeta('Регистрация','','');

            $this->set(compact('errors'));

    }

    public function logoutAction()
    {
        $this->layout = false;
        unset($_SESSION['is_user']);
        header("Location: /user");
        die();

    }
}