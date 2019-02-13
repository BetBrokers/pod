<?php
namespace P2P\Socket;

/**
 *
 * @author Lenovo
 *        
 */
class P2P
{

    /**
     * 
     * @var array
     */
    public $url = array();
    
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
     * 
     * @param array $data
     * @return unknown
     */
    public function querySeed()
    {
       // $seed = $this->setHydrateUrl($data);
        
        return curl_setopt($this->ch, CURLOPT_URL, $this->queryPeers());
        /*curl_setopt($this->ch, CURLOPT_HTTPHEADER,
            array("Content-Type: application/x-www-form-urlencoded"));
        */
        
        //$json = $this->_call();
        
        // throw ApiError if we get an 'error' field in the JSON
        //return $json;
        
    }
    
    public function queryPeers()
    {
        $peers = glob('data/peers/*');
        
        foreach($peers as $key){
            if(file_exists($key)){
                $url = explode('/', $key);
                return 'http://'.$url['2'];
            }
        }
    }
    
    public function getBocks()
    {
        $blocks = glob($this->queryPeers().'/lottobits/data/blockchain/blocks/*.json');
        
        foreach($blocks as $key){
            if(file_exists($key)){
                return $key;
            }
        }
        
    }
    
    public function getTx()
    {
        $blocks = file_get_contents($this->queryPeers().'/lottobits/data/blockchain/tx/peers');
        
        for($i = 0; $i<sizeof($blocks); $i++){
            if(file_exists($this->queryPeers().'/lottobits/data/blockchain/tx/peers')){
                return $this->fileLine($blocks, $i);
            }    
        }
        
        
    }

    
    
    /**
     * 
     */
    public function peerCreate()
    {
        $json = json_encode(array(
            'peers' => array(
                '127.0.0.1'
            )
        ));
        
        //if(!file_exists('data/peers/nodes.json')){
            $nodes = file_put_contents('data/peers/'.$_SERVER['HTTP_HOST'].'.json', $json);
        //}
        
        //$node = fclose($node);
        
        return $nodes;
    }
    
    /**
     * 
     * @throws HttpError
     * @return mixed
     */
    private function _call() {
        $t0 = microtime(true);
        $response = curl_exec($this->ch);
        $dt = microtime(true) - $t0;
        
        if(curl_error($this->ch)) {
            $info = curl_getinfo($this->ch);
            throw new HttpError("Call to " . $info['url'] . " failed: " . curl_error($this->ch));
        }
        $json = json_decode($response, true);
        
        return $json;
    }
}

