<?php
namespace Manager\Components\Crypt;

use Zend\Hydrator\ArraySerializable;
use ArrayObject;

/**
 *
 * @author Lenovo
 *        
 */
abstract class AbstractCrypt
{

    public $text;
    
    public $cipher;
    
    public $key;
    
    public $mode;
    
    public function getData(array $data)
    {
        $hydrator = new ArraySerializable();
        
        $object   = new ArrayObject($data);
        
        $data     = $hydrator->extract($object);
        if(is_array($data)){
            foreach($data as $key => $value){
                switch($key){
                    case 'text':
                        $this->setText($value);
                        break;
                    case 'cipher':
                        $this->setCipher($value);
                        break;
                    case 'key':
                        $this->setKey($value);
                        break;
                    case 'mode':
                        $this->setMode($value);
                        break;
                }
            }
        }
    }
    
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }
    
    public function getText()
    {
        return $this->text;
    }
    
    public function setCipher($cipher)
    {
        $this->cipher = $cipher;
        return $this;
    }
    
    public function getCipher()
    {
        return $this->cipher;
    }
    
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }
    
    public function getKey()
    {
        return $this->key;
    }
    
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }
    
    public function getMode()
    {
        return $this->mode;
    }
    
}

