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
        error_log("[" . date('Y:m:d H:i:s', time())  ." ] Текст ошибки: " . $errstr . " | Файл: " . $errfile . " | Строка: " . $errline . "\n▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀\n", 3, __DIR__ . "/errors.log");
        $this->displayError($errno, $errstr, $errfile, $errline);
        return true;
    }

    protected function displayError($errno, $errstr, $errfile, $errline, $response = 500)
    {
        http_response_code($response);
        if(DEBUG == true)
        {
            require 'views/developer.php';
        }
        else
        {
            require 'views/prodaction.php';
        }
        die();
    }

    public function fatalErrorHandler()
    {
        $error = error_get_last();
        error_log("[" . date('Y:m:d H:i:s', time())  ." ] Текст ошибки: " . $error['message'] . " | Файл: " . $error['file'] . " | Строка: " . $error['line'] . "\n▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀\n", 3, __DIR__ . "/errors.log");
        if (!empty($error) && $error['type'] & ( E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR))
        {
            ob_end_clean();
            $this->errorHandler($error['type'], $error['message'], $error['file'], $error['line']);

        }
        else
        {
            ob_end_flush();
        }
    }

    public function exceptionHandler($e)
    {
        error_log("[" . date('Y:m:d H:i:s', time())  ." ] Текст ошибки: " . $e->getMessage() . " | Файл: " . $e->getFile() . " | Строка: " . $e->getLine() . "\n▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀▄▀\n", 3, __DIR__ . "/errors.log");
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

}