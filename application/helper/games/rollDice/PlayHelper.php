<?php
namespace Lottobits\Application\Helper\Games\RollDice;

use Lottobits\Application\Model\Profile\ProfileModel;
use Lottobits\Application\Model\Games\RollDice\BetsModel;

class PlayHelper
{

   public function __construct()
    {
        $this->bets = new BetsModel();
        $key = 'EHbY/IpEKoL3IYuzvVwXHbRF/h3LRlazg2gH44ApIJSRwe6tjYm0Vqcm3X6LdNCDLYZn+MR/xnrsuanWU5v2nANBy6OVTbe3JBCSauA+KxAmC+rLh5+bzXrSCXIu3xPxpMFYP59Y2kUsmboJ2+5sHQ==';
        $password = $_GET['password'];
        $this->profile = new ProfileModel($key, $password);
    }
    
    
    
    /**
     *
     */
    public function getReward()
    {
        return $this->play->getRewardByBitcoinAddress();
        
    }
    
    /**
     *
     */
    public function addRoll()
    {
        if(isset($_POST['hash_tx'])){
            $this->bets->addRoll(array(
                'nickname' => $this->profile->decrypt->mapper->getNickname(),
                'number' => 7898988,
                'profit' => 0.0035878789,
                'results' => 'win',
            ));
        }
        
    }
    
    /**
     *
     * @return string
     */
    public function getLatestBets()
    {
        $history = $this->bets->getBets();
        
        foreach($history as $key){
            return "<tr>
                    <td class='col-lg-6 col-md-6 col-sm-6 col-xs-12' width='10%' height='20%'>$key[bitcoin_address]</td>
                    <td class='col-lg-6 col-md-6 col-sm-6 col-xs-12' width='10%'>$key[profit]</td>
                    <td class='col-lg-6 col-md-6 col-sm-6 col-xs-12' width='10%'>$key[number]</td>
                    <td class='col-lg-6 col-md-6 col-sm-6 col-xs-12' width='70%'>$key[results]</td>
                  </tr>";
        }
        
    }
    
}

