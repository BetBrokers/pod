<?php
namespace Crowdforex\Api;

/**
 *
 * @author Lenovo
 *        
 */
class Client extends AbstractClientMapper
{

    public $url;// = 'http://localhost/crowd_forex/public/static/'
    
    public $ch;
    /**
     */
    public function __construct()
    {
        $this->service_url = null;
        
        /*if(!is_null($api_code)) {
            $this->api_code = $api_code;
        }*/
        
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_USERAGENT, 'Blockchain-PHP/1.0');
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 60);
    }
    
    /**

     */
    public function setHydrateUrl(array $data)
    {
        $this->url = $data;
        
        foreach($this->url as $key){
            $this->url = $key;
        }
        return $this;
    }
    
    /**

     */
    public function getUrl()
    {
        return curl_setopt($this->ch, CURLOPT_URL, $this->url);
    }
    
    public function getMethodArray()
    {
        
    }
    
    
    /**
     * 
     * @return number
     */
    public function getPeersData()
    {
        //foreach($resource as $key){
        curl_setopt($this->ch, CURLOPT_URL, $this->url.'/lottobits-min/public/api/peers');
        curl_setopt($this->ch, CURLOPT_HTTPHEADER,
            array("Content-Type: application/x-www-form-urlencoded"));
        
        
        $json = $this->_call();
        
        // throw ApiError if we get an 'error' field in the JSON
        return file_put_contents('data/peers.json', '['.$json.']');
        //}
    }
    
    public function getGraphic()
    {
        //foreach($resource as $key){
        curl_setopt($this->ch, CURLOPT_URL, $this->url.'/crowdforex/public/static/graphics');
        curl_setopt($this->ch, CURLOPT_HTTPHEADER,
            array("Content-Type: application/x-www-form-urlencoded"));
        
        
        $response = curl_exec($this->ch);
        
        return $response;
    }
    /**

     */
    private function _call() {
        $t0 = microtime(true);
        $response = curl_exec($this->ch);
        $dt = microtime(true) - $t0;
        
        if(curl_error($this->ch)) {
            $info = curl_getinfo($this->ch);
            throw new HttpError("Call to " . $info['url'] . " failed: " . curl_error($this->ch));
        }
       // $response = json_encode($response);
        $json = json_decode($response, true);
        
        return $response;
    }
}

