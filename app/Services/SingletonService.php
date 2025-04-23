<?php

namespace App\Services;

class SingletonService
{
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new SingletonService();
        }

        return self::$instance;
    }

    public function serviceMethod()
    {
        return "Método de servicio singleton";
    }
}
