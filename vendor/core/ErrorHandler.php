<?php

namespace vendor\core;


class ErrorHandler
{
    public function __construct()
    {
        if(DEBUG)
        {
            error_reporting(-1);
        }
        else
        {
            error_reporting(0);
        }

        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this,'fatalErrorHandler']);
        set_exception_handler([$this,'exceptionHandler']);
    }

    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->logErrors($errstr, $errfile, $errline);
        $this->displayError($errno, $errstr, $errfile, $errline);
        return true;
    }

    public function fatalErrorHandler()
    {
        $error = error_get_last();
        if (!empty($error) && $error['type'] & ( E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR))
        {
            $this->logErrors($error['message'], $error['file'], $error['line']);
            ob_end_clean();
            $this->errorHandler($error['type'], $error['message'], $error['file'], $error['line']);

        }
        else
        {
            ob_end_flush();
        }
    }

    protected function displayError($errno, $errstr, $errfile, $errline, $response = 500)
    {
        http_response_code($response);
        if($response == 404)
        {
            require WWW. '/errors/404.php';
            die();
        }
        if(DEBUG)
        {
            require WWW. '/errors/developer.php';
        }
        else
        {
            require WWW. '/errors/prodaction.php';
        }
        die();
    }


    public function exceptionHandler($e)
    {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date('Y:m:d H:i:s', time())  ." ] Текст ошибки: " . $message . " | Файл: " . $file . " | Строка: " . $line . "\n▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀\n", 3, ROOT . "/temp/errors.log");
    }


}