<?php

namespace Manager\Config;

class ManagerHydratorConfig extends AbstractHydratorConfig
{
    
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
    
    public function getApplicationConfig($configArray = [])
    {
        foreach($configArray as $key){
            switch($key){
                case 'manager':
                    return $this->setManager($key);
                    break;
            }
            
        }
    }
    
    
}
