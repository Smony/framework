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

//        $array = APP::$app->getComponents();

        $model = new User();
        R::fancyDebug(TRUE);
        $data = $_POST;
        if(isset($data['do_singup']))
        {
            $errors = '';
            if(R::count($model->table, 'email = ?', array($data['email'])) > 0)
            {
                $errors = 'Користувач з таким email\'ом вже є';
            }
            if(empty($errors))
            {
                $new_name = getImageUpload();
                $user = R::dispense($model->table);

                $user->nick = $data['nick'];
                $user->email = $data['email'];
                $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
                $user->realname = $data['realname'];
                $user->phone = $data['phone'];
                $user->city = $data['city'];
                $user->birthdate = $data['b_date'];
                $user->public = $data['public'];
                $user->aboutme = $data['aboutme'];
                $user->userip = $_SERVER['REMOTE_ADDR'];

                if (isset($data['send_club']))
                {
                    $user->send_club = 1;
                }

                if (isset($data['send_news']))
                {
                    $user->send_news = 1;
                }

                if (isset($data['send_comments']))
                {
                    $user->send_comments = 1;
                }

                if (isset($data['send_email']))
                {
                    $user->send_email = 1;
                }

                $user->sez = $data['sez'];
                $user->datareg = date('Ymd');
                $user->photo = $new_name;
                $user->ischat = 1;

                R::store($user);
                header("Location: /user");
                die();
            }
            else
            {
                //dd($errors);
            }
        }
        View::setMeta('Сторінка реєстрації, Вірші, поезія. Клуб поезії','вірші, поезія, клуб поезії, вірші про кохання, листівки і вірші, молоді поети, розмістити вірш, вірші, поезія, українські поети, власна творчість, творчість, бібліотека поезії, чат поетів, TOP поетів, TOP поетів, Євген Юхниця, клуб поезії Євген Юхниця','Вірші Поезія - клуб Поезії. Вірші. Вірші про кохання. Вірші всім.');
        $this->set(compact('errors', 'data'));
    }

    public function logoutAction()
    {
        $this->layout = false;
        unset($_SESSION['is_user']);
        header("Location: /user");
        die();
    }
}