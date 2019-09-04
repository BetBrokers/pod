<?php
namespace Lottobits\Crypto;

class AES_256_CBC
{

    private $keyCode;
    
    public function __construct($keyCode)
    {
        $this->keyCode = $keyCode;
    }
    
    public function getKeyCode()
    {
        return $this->keyCode;
    }
    
    /**
     * 
     * @param string $plaintext
     * @param string $password
     * @return string
     */
    public function encrypt($plaintext) 
    {
        $method = "AES-256-CBC";
        $key = hash('sha256', $this->getKeyCode(), true);
        $iv = openssl_random_pseudo_bytes(16);
        
        $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
        $hash = hash_hmac('sha256', $ciphertext, $key, true);
        
        return $iv . $hash . $ciphertext;
    }
    
    
    /**
     * 
     * @param string $ivHashCiphertext
     * @param string $password
     * @return NULL|string
     */
    public function decrypt($ivHashCiphertext) 
    {
        $method = "AES-256-CBC";
        $iv = substr($ivHashCiphertext, 0, 16);
        $hash = substr($ivHashCiphertext, 16, 32);
        $ciphertext = substr($ivHashCiphertext, 48);
        $key = hash('sha256', $this->getKeyCode(), true);
        
        if (hash_hmac('sha256', $ciphertext, $key, true) !== $hash) return null;
        
        return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
    }
}

