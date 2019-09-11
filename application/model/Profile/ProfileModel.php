<?php
namespace Lottobits\Application\Model\Profile;

use Lottobits\Profile\Decrypt;
use Lottobits\Profile\Generate;

class ProfileModel
{

    public $key;
    
    public $password;
    
    public function __construct($key, $password)
    {
        //Decrypt the profile
        $mapper = new ProfileMapper();
        $this->decrypt = new Decrypt($mapper);
        $this->key = $key;
        $this->password = $password;
        session_start();
        $this->getAuth();
        $this->decrypt = $this->decrypt->profileDecrypt($_SESSION['key'], $_SESSION['password']);
        
    }
    
    /**
     * 
     */
    public function getAuth()
    {
        if(!isset($_SESSION)){
            $_SESSION['key'] = $this->key;
            $_SESSION['password'] = $this->password;
        }
        
    }
    
    /**
     *
     */
    public static function generateProfile(string $keyCode, $address, $signature)
    {
        return Generate::generateProfile($keyCode, $address, $signature);
    }
    
}

