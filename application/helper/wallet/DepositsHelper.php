<?php
namespace Lottobits\Application\Helper\Wallet;

use Lottobits\Application\Model\Wallet\DepositsModel;
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
        if(isset($_POST['hash-tx'])){
            //$this->deposits->getBalanceByHashTx();
            $this->deposits->addBalance(array(
                'nickname' => $this->profile->decrypt->mapper->getNickname(),
                'bitcoin_address' => $this->profile->decrypt->mapper->getBitcoinAddress(0),
                'hash_tx' => $_POST['hash-tx'],
            ));
        }
        
    }
    
}

