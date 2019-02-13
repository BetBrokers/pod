<?php
namespace CrowdForex\Api;

use Zend\Hydrator\ArraySerializable;
use ArrayObject;

/**
 *
 * @author Lenovo
 *        
 */
abstract class AbstractClientMapper
{

    public $user;
    
    public $id;
    
    public $coin;
    
    public $priceCoin;
    
    public $hash;
    
    public $path;
    
    public $type;
    
    public function getData(array $data)
    {
        $hydrator = new ArraySerializable();
        
        $object   = new ArrayObject($data);
        
        $data     = $hydrator->extract($object);
        if(is_array($data)){
            foreach($data as $key => $value){
                switch($key){
                    case 'user':
                        $this->setUser($value);
                        break;
                    case 'id':
                        $this->setId($value);
                        break;
                    case 'coin':
                        $this->setCoin($value);
                        break;
                    case 'hash':
                        $this->setHash($value);
                        break;
                    case 'path':
                        $this->setPath($value);
                        break;
                    case 'price_coin':
                        $this->setPriceCoin($value);
                        break;
                    case 'type':
                        $this->setType($value);
                        break;
                }
            }
        }
    }
    
    /**
     * 
     * @return NULL[]
     */
    public function getResource($resource)
    {
        $this->getData($resource);
        
        $resource = 'user='.$this->getUser().'&id='.$this->getId();
            
        
        
        //foreach($resource as $key)
        return $resource;
    }
    
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
    
    public function getUser()
    {
        return 'user='.$this->user;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    public function getId()
    {
        return 'id='.$this->id;
    }
    
    public function setCoin($coin)
    {
        $this->coin = $coin;
        return $this;
    }
    
    public function getCoin()
    {
        return 'coin='.$this->coin;
    }
    
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }
    
    public function getHash()
    {
        return 'hash='.$this->hash;
    }
    
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }
    
    public function getPath()
    {
        return $this->path;
    }
    
    public function setPriceCoin($priceCoin)
    {
        $this->priceCoin = $priceCoin;
        return $this;
    }
    
    public function getPriceCoin()
    {
        return 'price_coin='.$this->priceCoin;
    }
    
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    
    public function getType()
    {
        return 'type='.$this->type;
    }
}

