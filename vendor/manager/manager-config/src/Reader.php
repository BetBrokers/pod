<?php

namespace Manager\Config;

//  n use Manager\File\PathFileLocator;
//use Zend\Config\Config;
use Zend\Json\Json;
//use Zend\Config\Reader\Json;
use Zend\Config\Writer\PhpArray;

class Reader extends AbstractHydratorConfig
{
    
    public function __construct(array $data)
    {
        $this->getData($data);
        
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
        $this->setObject();
        
        $reader = new Json();
        return $reader->fromFile($this->getFile());
    }
    
    /*
     * Convert data array to json file
     */
    public function toArray()
    {
        
       // $this->toJson();
        $phpNative = Json::decode(file_get_contents($this->getFile()), Json::TYPE_ARRAY);
        
        //$this->setObject($phpNative);
        
        $writer = new PhpArray();
        return $writer->toString($phpNative);
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
