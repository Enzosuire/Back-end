<?php

namespace App;

class Autoloader
{


    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        //echo $class . "<br>";
        $trimmed = trim($class, __namespace__ . "\\");
        //echo $trimmed . "<br>";
        $slash = str_replace("\\", "/", $trimmed);
        //echo __DIR__ . "<br>";
        $file = __DIR__ . "/" . $slash . ".php";
        //echo $file . "<br>";
        if (file_exists($file)) {
            return require_once $file;
        };
    }
}
