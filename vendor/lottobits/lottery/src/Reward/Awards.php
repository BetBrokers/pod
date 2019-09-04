<?php
namespace Lottobits\Lottery\Reward;

class Awards
{

    /**
     * 
     * @var string
     */
    private $results;
    
    /**
     * 
     * @param string $results
     */
    public function __construct(string $results)
    {
        $this->results = $results;
    }
    
    /**
     * 
     * @param int $thousand
     */    
    public function getAwardThousands(string $thousand)
    {
        $results = json_decode($this->results, true);
        $pos = strpos($this->results, $thousand);
        if($pos != false){
            for($i = 1; $i <= count($results); $i++){
                //if(array_key_exists($i, $results)){
                    $message = sprintf('You win the prize %s', substr($results[$i], $i));
                    break;
                //}
            }
        }
        
        return $message;
    }
}

