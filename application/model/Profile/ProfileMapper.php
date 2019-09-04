<?php
namespace Lottobits\Application\Model\Profile;


use Lottobits\Profile\DecryptMapperInterface;

class ProfileMapper implements DecryptMapperInterface
{

    private $json;
    
    private $bitcoinAddress;
    
    private $nickname = [];
    
    public function getData(array $data)
    {
        //$hydrator = new ArraySerializable();
        
        //$object   = new ArrayObject($data);
        
        //$data     = $hydrator->extract($object);
        if(is_array($data)){
            foreach($data as $key => $value){
                switch($key){
                    case 'bitcoin_address':
                        $this->setBitcoinAddress($value);
                        break;
                    case 'nickname':
                        $this->setNickname($value);
                        break;
                }
            }
        }
        
        return $this;
    }
    
    public function setBitcoinAddress($bitcoinAddress)
    {
        $this->bitcoinAddress = $bitcoinAddress;
        return $this;
    }
    /**
     * @return null|string
     */
    public function getBitcoinAddress()
    {
        return $this->bitcoinAddress;
    }
    
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * @return null|string
     */
    public function getNickname()
    {
        return $this->nickname;
    }
    
    
}

