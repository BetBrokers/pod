<?php
namespace Lottobits\Application\Model\Profile;

use Lottobits\Profile\Decrypt;
use Lottobits\Profile\Generate;

class ProfileModel
{

    public function __construct($key, $password)
    {
        //Decrypt the profile
        $mapper = new ProfileMapper();
        $this->decrypt = new Decrypt($mapper);
        $this->decrypt = $this->decrypt->profileDecrypt($key, $password);
        
    }
    
    /**
     *
     */
    public static function generateProfile(string $keyCode)
    {
        return Generate::generateProfile($keyCode);
    }
    
}

