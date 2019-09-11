<?php
namespace Lottobits\Application\Model\Wallet;

class DepositsMapper
{

    private $nickname;
    
    private $hashTx;
    
    private $balance;
    
    private $bitcoinAddress;
    
    public function __construct()
    {
        
    }
    
    public function getData(array $data)
    {
        //$hydrator = new ArraySerializable();
        
        //$object   = new ArrayObject($data);
        
        //$data     = $hydrator->extract($object);
        if(is_array($data)){
            foreach($data as $key => $value){
                switch($key){
                    case 'nickname':
                        $this->setNickname($value);
                        break;
                    case 'hash_tx':
                        $this->setHashTx($value);
                        break;
                    case 'balance':
                        $this->setBalance($value);
                        break;
                    case 'bitcoin_address':
                        $this->setBitcoinAddress($value);
                        break;
                    
                }
            }
        }
        
        return $this;
    }
    
    /**
     * 
     * @param string $nickname
     * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
     */
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
    
    /**
     *
     * @param string $hashTx
     * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
     */
    public function setHashTx($hashTx)
    {
        $this->hashTx = $hashTx;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getHashTx()
    {
        return $this->hashTx;
    }
    
    /**
     *
     * @param string $balance
     * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getBalance()
    {
        return $this->balance;
    }
    
    /**
    *
    * @param string $bitcoinAddress
    * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
    */
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
    
    
}

