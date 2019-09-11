<?php
namespace Lottobits\Application\Model\Wallet;

use Blockchain\Blockchain;
use Lottobits\Database\SqliteConnection;

class DepositsModel extends SqliteConnection
{

    public static $addressForDeposits = '1Br3pYZxN7ASd98yyKg6syBRa2oiH8Z7pY';
    
    public function __construct()
    {
        $this->getData(require ROOT . '/db/databases.php');
        $this->wallet = $this->getSqliteConnection('wallet');
        $this->blockchain = new Blockchain();
        $this->mapper = new DepositsMapper();
    }
    
    /**
     *
     */
    public function getHashTx($hashTx)
    {
        $hashTx = $this->wallet->query("SELECT * FROM deposits WHERE hash_tx = '$hashTx'");
        //var_dump($hashTx);
        foreach($hashTx as $key){
            $hashTx = $key;
        }
        return $hashTx;
    }
    
    /**
     *
     * @param array $data
     */
    public function addBalance(array $data)
    {
        $this->mapper->getData($data);
        $this->getBalanceByHashTx();
        
            if($this->getHashTx($this->mapper->getHashTx())->rowCount() > 0){
                throw new \Exception('This transaction not be included more on this game');
            }
            
            if($this->mapper->getBalance() == NULL){
                throw new \Exception('This transaction not be included more on this game');
            }
            $balance = "INSERT INTO deposits (id, nickname, hash_tx, balance, bitcoin_address)
                 VALUES (NULL, '".$this->mapper->getNickname()."', '".$this->mapper->getHashTx()."', '".$this->mapper->getBalance()."', '".$this->mapper->getBitcoinAddress()."')";
            
            $this->wallet->exec($balance);
        
    }
    
    /**
     *
     */
    public function getBalanceByHashTx()
    {
        $hashTxVerifier = $this->blockchain->Explorer->getTransaction($this->mapper->getHashTx());
        $output = json_encode($hashTxVerifier->outputs);
        $json = json_decode($output, TRUE);
        
        $balance = null;
        
        for($i = 0; $i <= count($json); $i++){
            $output = json_encode($json[$i++]);
            $j = json_decode($output,true);
            if(strpos($output, self::$addressForDeposits) != false){
                continue;
                break;
            }
            
               // throw new \Exception('This transaction not be included because your transaction is not be sent to address of this game');
            $balance += $json[$i++]['value'];
               
               var_dump(number_format($balance, 8));  
            if($json[$i++]['address'] == self::$addressForDeposits){
                $this->mapper->setBalance($balance);
            }    
            $i++;
        }
        
        
    }
    
    
    /**
     *
     */
    public function getDeposit($nickname)
    {
        $nickname = $this->wallet->query("SELECT * FROM balance WHERE nickname = '$nickname'");
        //var_dump($hashTx);
        
        foreach($nickname as $key){
            $nickname = $key;
        }
        
        return $nickname;
    }
}

