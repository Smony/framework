<?php


namespace app\controllers;

use app\models\User;
use vendor\core\base\View;
use R;


class MobileController extends AppController
{
    public $layout = 'mobile';

    public function indexAction()
    {
        $users = new User();
        if(isset($_SESSION['id_user']))
        {
            $hi = "Привет ,";
            $userId = $_SESSION['id_user'];
            $name = $_SESSION['nick_user'];
            $user = R::load($users->table, $userId);
            unset($_SESSION['error_us_pass']);
            unset($_SESSION['error_us_name']);
        }
        else
        {
            $user = NULL;
//            header("Location: /mobile/index");
//            die();
        }

        View::setMeta('mobile');
        $this->set(compact('hi', 'name', 'user'));
    }

    public function singinAction()
    {
        $model = new User();
        $data = $_POST;
        if(isset($_SESSION['id_user']))
        {
            header("Location: /");
            die();
        }
        else
        {
            if(isset($data['do_singin']))
            {
                $errors = '';
                $user = R::findOne($model->table, 'email = ?', array($data['email']));
                if($user)
                {
                    if($data['password'] == $user->password)
                    {
                        $_SESSION['id_user'] = $user->id;
                        $_SESSION['nick_user'] = $user->nick;

                        header("Location: /");
                        die();
                    }
                    else
                    {
                        $_SESSION['error_us_pass'] = 'Введите правельный пароль';
                        header("Location: /");
                        die();

                    }
                }
                else
                {
                    $_SESSION['error_us_name'] = 'Пользователь не найден';
                    header("Location: /");
                    die();
                }
            }
        }
//        $this->set(compact('errors'));
        $this->loadView('index', compact('errors'));
    }

    public function logoutAction()
    {
        $this->layout = false;
        unset($_SESSION['id_user']);
        unset($_SESSION['nick_user']);
        unset($_SESSION['error_us_pass']);
        unset($_SESSION['error_us_name']);
        header("Location: /");
        die();
    }

}