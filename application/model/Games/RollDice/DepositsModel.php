<?php
namespace Lottobits\Application\Model\Games\RollDice;

use Blockchain\Blockchain;
use Lottobits\Database\SqliteConnection;

class DepositsModel extends SqliteConnection
{

    public static $addressForDeposits = '1C9VxK9yCZexL8Ha4RYqLz1jzK68mH74jw';
    
    public function __construct()
    {
        $this->getData(require ROOT . '/db/databases.php');
        $this->rollDice = $this->getSqliteConnection('games/roll-dice');
        $this->blockchain = new Blockchain();
        $this->mapper = new DepositsMapper();
    }
    
    /**
     *
     */
    public function getHashTx($hashTx)
    {
        $hashTx = $this->rollDice->query("SELECT * FROM balance WHERE hash_tx = '$hashTx'");
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
        
        $hashTxVerifier = $this->blockchain->Explorer->getTransaction($this->mapper->getHashTx());
        $output = json_encode($hashTxVerifier->outputs);
        
        if($this->getTicketByHashTx($this->mapper->getHashTx())->rowCount() > 0){
            throw new \Exception('This transaction not be included more on this game');
        }
        
        if(strpos($output, self::$addressForDeposits) == false){
            throw new \Exception('This transaction is not valid because not are be sent to address of this game');
        }
        
        
        $balance = "INSERT INTO balance (id, nickname, hash_tx, balance, bitcoin_address)
             VALUES (NULL, '".$this->mapper->getNickname()."', '".$this->mapper->getHashTx()."', '".$this->mapper->getBalance()."', '".$this->mapper->getBitcoinAddress()."')";
        
        $this->rollDice->exec($balance);
    }
    
    /**
     *
     */
    public function getBalanceByHashTx()
    {
        $balance = $this->blockchain->Explorer->getAddress(self::$addressForDeposits)->final_balance;
        $this->mapper->setBalance($balance);
    }
    
    /**
     *
     */
    public function getDeposits()
    {
        $nickname = $this->rollDice->query("SELECT * FROM balance WHERE nickname = '$nickname'");
        //var_dump($hashTx);
        
        return $nickname;
    }
}

