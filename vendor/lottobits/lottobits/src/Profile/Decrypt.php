<?php
namespace Lottobits\Profile;

use Lottobits\Crypto\AES_256_CBC;

class Decrypt
{

    public $json = [];
    
    public function __construct(DecryptMapperInterface $mapper)
    {
        $this->mapper = $mapper; 
        
    }
    
    public function getJson()
    {
        return $this->json;
    }
    
    /**
     *
     * @param string $keyCode
     * @return string
     */
    public function profileDecrypt($profile, string $keyCode)
    {
        $hash = md5($keyCode);
        $aes = new AES_256_CBC($hash);
        $decrypted = $aes->decrypt(base64_decode($profile));
        $json = json_decode($decrypted, true);
        $this->json = $json;
        $this->authDecrypt();
        return $this;
    }
    
    /*
     * 
     */
    protected function authDecrypt()
    {
        if(is_null($this->json)){
            return sprintf('Decrypt invalid');
        }
        else{
            $this->mapper->getData($this->getJson());
        }
        
    }
}

