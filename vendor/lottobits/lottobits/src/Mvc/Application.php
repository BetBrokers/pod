<?php
namespace Lottobits\Mvc;

class Application
{

    public function __construct()
    {}
    
    /**
     * 
     * @param string $dir
     * @return mixed
     */
    public static function controller($dir, $vars)
    {
        $controller = new Controller($dir);
        return $controller->access($vars);
    }
}

