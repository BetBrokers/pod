<?php
namespace Lottobits\Application\Helper\Games\RollDice;

use Lottobits\Application\Model\Games\RollDice\DepositsModel;
use Lottobits\Application\Model\Profile\ProfileModel;

class DepositsHelper
{

    public function __construct()
    {
        $this->deposits = new DepositsModel();
        $key = 'EHbY/IpEKoL3IYuzvVwXHbRF/h3LRlazg2gH44ApIJSRwe6tjYm0Vqcm3X6LdNCDLYZn+MR/xnrsuanWU5v2nANBy6OVTbe3JBCSauA+KxAmC+rLh5+bzXrSCXIu3xPxpMFYP59Y2kUsmboJ2+5sHQ==';
        $password = $_GET['password'];
        $this->profile = new ProfileModel($key, $password);
    }
    
    /**
     * 
     */
    public function addBalance()
    {
        if(isset($_POST['hash_tx'])){
            $this->deposits->getBalanceByHashTx();
            $this->deposits->addBalance(array(
                'nickname' => $this->profile->decrypt->mapper->getNickname(),
                'bitcoin_address' => $this->profile->decrypt->mapper->getBitcoinAddress(0),
                'hash_tx' => $_POST['hash_ tx'],
            ));
        }
        
    }
    
    /**
     *
     * @return string
     */
    public function getLatestDeposits()
    {
        $history = $this->deposits->roll($data);
        
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

