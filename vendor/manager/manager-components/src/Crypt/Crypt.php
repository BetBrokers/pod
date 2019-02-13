<?php
namespace Manager\Components\Crypt;

use Zend\Crypt\Password\Bcrypt;
use Zend\Crypt\BlockCipher;

/**
 *
 * @author Lenovo
 *        
 */
class Crypt extends AbstractCrypt
{

    const ENCRYPT = 'encrypt';
    
    const DECRYPT = 'decrypt';
    
    /**
     */
    public function __construct()
    {}

    /**
     * 
     * @return \Zend\Crypt\Password\Bcrypt
     */
    public function bcrypt($key = null)
    {
        $bcrypt = new Bcrypt();
        if($key != null){
            $bcrypt->setSalt($key);
        }
        
        return $bcrypt;
    }
    
    public function blockCipher($plainText, $key, $adapter,  array $factory = null)
    {
        
        $blockCipher = BlockCipher::factory($adapter, $factory);
        $blockCipher->setKey($key);
        return $blockCipher->encrypt($plainText);
    }
    
    public function openssl()
    {
        if($this->getMode() == self::ENCRYPT)
            $openssl = 'openssl_encrypt';
        
        if($this->getMode() == self::DECRYPT)
            $openssl = 'openssl_decrypt';
        
        $ivlen = openssl_cipher_iv_length($this->getCipher());
        $iv = openssl_random_pseudo_bytes($ivlen);
        $mix = base64_decode($this->getCipher());
        $tag = substr($mix,0,$ivlen);
        return $openssl($this->getText(), $this->getCipher(), $this->getKey(), $options=0, $iv, $tag);
        
    }
    
    public function base64()
    {
        if($this->getMode() == self::ENCRYPT)
            $base64 = 'base64_encode';
            
        if($this->getMode() == self::DECRYPT)
            $base64 = 'base64_decode';
        
        return $base64($this->getText().$this->getKey());
    }
}


