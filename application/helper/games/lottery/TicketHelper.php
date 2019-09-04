<?php
namespace Lottobits\Application\Helper\Games\Lottery;

use Lottobits\Application\Model\Games\Lottery\PlayModel;
use Lottobits\Application\Model\Profile\ProfileModel;

class TicketHelper
{

    public static $addressForBuyTicket = '122PKv1ekCwMffhiXCfoUC6ARCwH7hSVji';
    
    public function __construct()
    {
        $this->play = new PlayModel();
        $key = 'EHbY/IpEKoL3IYuzvVwXHbRF/h3LRlazg2gH44ApIJSRwe6tjYm0Vqcm3X6LdNCDLYZn+MR/xnrsuanWU5v2nANBy6OVTbe3JBCSauA+KxAmC+rLh5+bzXrSCXIu3xPxpMFYP59Y2kUsmboJ2+5sHQ==';
        $password = 'testando';
        $this->profile = new ProfileModel($key, $password);
    }
    
    /**
     * 
     */
    public function getBuyTicket()
    {
        if(isset($_POST['hash_tx'])){
            $this->play->generateTicket();
            $this->play->buyTicket(array(
                'nickname' => $this->profile->decrypt->mapper->getNickname(),
                'bitcoin_address' => $profile->decrypt->mapper->getBitcoinAddress(0),
                'hash_tx' => 'a62d534b60f3dbc79d61df21030225b47c16fca8e40c986da3c510b12b5c9e64',
                'ticket' => base_convert('a62d', 16, 10),
                'price' => 25
            ));
        }
        
    }
    
    public static function getAddressForBuyTicket()
    {
        return self::$addressForBuyTicket;
    }
    
    /**
     * 
     * @return string
     */
    public function getLatestBets()
    {
        $ticket = $this->play->getTicket();
        
        foreach($ticket as $key){
            return "<tr>
                    <td class='col-lg-6 col-md-6 col-sm-6 col-xs-12' width='10%' height='20%'>$key[bitcoin_address]</td>
                    <td class='col-lg-6 col-md-6 col-sm-6 col-xs-12' width='10%'>$key[price]</td>
                    <td class='col-lg-6 col-md-6 col-sm-6 col-xs-12' width='10%'>$key[ticket]</td>
                    <td class='col-lg-6 col-md-6 col-sm-6 col-xs-12' width='70%'>$key[hash_tx]</td>
                  </tr>";
        }
        
    }
}

