<?php
namespace Lottobits\Mvc;

class Controller
{

    public $dir;
    
    public $len;
    
    public function __construct($dir)
    {
        $this->dir = $dir;
        $this->len = count($this->dir);
        
    }
    
    public function access(array $vars)
    {
        
        $controllerFile = APP."/controllers/".$this->dir;
        $controllerDir = explode('/', $controllerFile);
        
        if(file_exists($controllerFile.".php")){
            require($controllerFile.".php");
            
        }
        elseif(is_dir($controllerFile) && file_exists($controllerFile.".php")){
            require($controllerFile.".php");
        }
        else {
            require('error');
        }
    }
        
}

