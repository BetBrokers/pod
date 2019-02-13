<?php

namespace Manager\Config;

use Manager\File\PathFileLocator;
use Zend\Config\Config;

abstract class AbstractHydratorConfig
{
    
    public $file;
    
    public $to;
    
    public $name;
    
    public $theme;
    
    public $manager;
    
    public function getData(array $data)
    {
        if(is_array($data)){
            foreach($data as $key => $value){
                switch($key){
                    case 'file':
                        $this->setFile($value);
                        break;
                    case 'to':
                        $this->setTo($value);
                        break;
                        
                }
            }
        }
    }
    
    /*
     * Set the object for reader to array
     */
    public function setObject($data)
    {
        $config = new Config(array(), true);
        //$config->production = array();
        
        foreach($data as $key => $value){
            return $config->$key = $value;
        }
    }
    
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }
    
    public function getFile()
    {
        return $this->file;
    }
    
    public function seTo($to)
    {
        $this->to = $to;
        return $this;
    }
    
    public function getTo()
    {
        return $this->to;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }
    
    public function getTheme()
    {
        return $this->theme;
    }
    
    public function setManager($manager)
    {
        $this->manager = $manager;
        return $this;
    }
    
    public function getManager()
    {
        return $this->manager;
    }
    public function themeLocator($themeLocator)
    {
        PathFileLocator::__verifyPathLocator($themeLocator);
        
        return $themeLocator;
    }
    
}
