<?php
namespace Lottobits\Application\Model\Games\Lottery;

class PlayMapper
{

    private $nickname;
    
    private $ticket;
    
    private $price;
    
    private $bitcoinAddress;
    
    private $hashTx;
    
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
                    case 'ticket':
                        $this->setTicket($value);
                        break;
                    case 'price':
                        $this->setPrice($value);
                        break;
                    case 'bitcoin_address':
                        $this->setBitcoinAddress($value);
                        break;
                    case 'hash_tx':
                        $this->setHashTx($value);
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
    * @param string $ticket
    * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
    */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getTicket()
    {
        return $this->ticket;
    }
    
    /**
     *
     * @param string $ticket
     * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getPrice()
    {
        return $this->price;
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
}

