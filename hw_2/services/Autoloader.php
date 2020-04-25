<?php

namespace app\services;

define ('ROOT', dirname(__DIR__));

class Autoload
{
    public function loadClass($className) {

        $fileName = str_replace(['app\\', '\\'], ['', DIRECTORY_SEPARATOR], $className);
        $fileName = ROOT . DIRECTORY_SEPARATOR . "{$fileName}.php";
        if (file_exists($fileName)) {
            require_once $fileName;
        }
    }
}
