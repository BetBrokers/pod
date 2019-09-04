<?php
namespace Lottobits\Profile;

use Lottobits\Crypto\AES_256_CBC;
use StephenHill\Base58;

class Generate
{

    protected $bitcoinAddress;
    
    public function __construct()
    {
        $this->base58 = new Base58();
    }
    
    /**
     *
     */
    public static function generateProfile(string $keyCode, $bitcoinAddress = null, $nickname = null)
    {
        $hash = md5($keyCode);
        $aes = new AES_256_CBC($hash);
        $generate = new self();
        
        $profileEncrypted = base64_encode($aes->encrypt($generate->profileFormat($bitcoinAddress, $nickname)));
        self::profileDownload($profileEncrypted);
    }
    
    /**
     *
     */
    public function profileFormat($bitcoinAddress = null, $nickname = null)
    {
        if(is_null($bitcoinAddress)){
            $bitcoinAddress = [$this->base58->encode($bitcoinAddress)];
        }
        
        $nickname = hash_hmac('sha256', hash('sha256', $nickname),  hash('sha256', time()));
        
        $profile = json_encode(array(
            'bitcoin_address' => $bitcoinAddress,
            'nickname' => $nickname
        ));
        
        return $profile;
    }
    
    /**
     * 
     * @param string $wallet
     */
    public static function profileDownload($profile)
    {
        $time = hash('sha256', time());
        $profileTitle = $time.'.json';
        $profile = printf($profile);
        $profile = file_put_contents($profileTitle, $profile);
        
        return header("Content-Disposition: attachment; filename=".basename($profileTitle));
        
    }
    
}

