<?php

namespace Tutoriel;

class Autoloader {
    static function register() {
        spl_autoload_register([__CLASS__, "autoload"]);
    }

    static function autoload($class) {
        var_dump($class);
        if (strpos($class, __NAMESPACE__ . "\\") === 0) {
            $class = str_replace(__NAMESPACE__, "", $class);
            $class = str_replace("\\", "/", $class);
            require "class/" . $class . ".php";
        }
    }
}
?>