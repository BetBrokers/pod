<?php

namespace Manager\Config;

use Manager\File\PathFileLocator;
use Zend\Config\Config;
use Zend\Config\Writer\Json;

class InstallManager extends AbstractHydratorConfig
{
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    
    public function getConfig($configArray = [])
    {
        foreach($configArray as $key => $value){
            switch($key){
                case 'theme':
                    $this->setTheme($value);
                    break;
                case 'name':
                    $this->setName($value);
                    break;
            }
            
        }
    }
    
    /*
     * Convert data array to json file
     */
    public function toJson()
    {
        $config = new Config(array(), true);
        //$config->production = array();
        
        foreach($this->data as $key => $value){
            $config->$key = $value;
        }
        
        $writer = new Json();
        return $writer->toString($config);
    }
    
    /*
     * Generate file to install the cms to application
     */
    public function generate()
    {
        
    }
    
    public function get()
    {
        
    }
    
}
