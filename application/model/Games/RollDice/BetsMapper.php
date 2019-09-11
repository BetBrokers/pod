<?php
namespace Lottobits\Application\Model\Games\RollDice;

class BetsMapper
{

    private $nickname;
    
    private $profit;
    
    private $results;
    
    private $bitcoinAddress;
    
    private $number;
    
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
                    case 'profit':
                        $this->setProfit($value);
                        break;
                    case 'results':
                        $this->setResults($value);
                        break;
                    case 'number':
                        $this->setNumber($value);
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
     * @param string $profit
     * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
     */
    public function setProfit($profit)
    {
        $this->profit = $profit;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getProfit()
    {
        return $this->profit;
    }
    
    /**
     *
     * @param string $results
     * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
     */
    public function setResults($results)
    {
        $this->results = $results;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getResults()
    {
        return $this->results;
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
     * @param string $number
     * @return \Lottobits\Application\Model\Games\Lottery\PlayMapper
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
    
    /**
     * @return null|string
     */
    public function getNumber()
    {
        return $this->number;
    }
    
    
}

