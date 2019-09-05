<?php
namespace Lottobits\Application\Model\Games\Lottery;

use Lottobits\Database\SqliteConnection;
use Blockchain\Blockchain;

class PlayModel extends SqliteConnection
{

    /**
     * 
     */
    public function __construct()
    {
        $this->getData(require ROOT . '/db/databases.php');
        $this->lottery = $this->getSqliteConnection('games/lottery');
        $this->blockchain = new Blockchain();
        $this->mapper = new PlayMapper();
        
    }
    
    /**
     * 
     */
    public function getTicketByHashTx($hashTx)
    {
        $hashTx = $this->lottery->query("SELECT * FROM tickets WHERE hash_tx = '$hashTx'");
        //var_dump($hashTx);
        foreach($hashTx as $key){
            $hashTx = $key;
        }
        return $hashTx;
    }
    
    /**
     *
     */
    public function getTicket()
    {
        $hashTx = $this->lottery->query("SELECT * FROM tickets");
        
        return $hashTx;
    }
    
    /**
     * 
     * @param array $data
     */
    public function buyTicket(array $data)
    {
        $this->mapper->getData($data);
        //var_dump($this->getTicketByHashTx($this->mapper->getHashTx()));
        if($this->getTicketByHashTx($this->mapper->getHashTx())->rowCount() > 0){
            throw new \Exception('This transaction not be included more on this game');
        }
        
        
        $play = "INSERT INTO tickets (id, nickname, ticket, hash_tx, price, bitcoin_address) 
             VALUES (NULL, '".$this->mapper->getNickname()."', '".$this->mapper->getTicket()."', '".$this->mapper->getHashTx()."', '".$this->mapper->getPrice()."', '".$this->mapper->getBitcoinAddress()."')";
        
        $this->lottery->exec($play);
    }
    
    /**
     * 
     */
    public function generateTicket()
    {
        $ticket = substr($this->mapper->getHashTx(), 0, 3);
        $ticket = base_convert($ticket, 16, 10);
        $this->mapper->setTicket($ticket);
    }
    
    public function getRewardByBitcoinAddress()
    {
        $balance = $this->blockchain->Explorer->getAddress('1AqC4PhwYf7QAyGBhThcyQCKHJyyyLyAwc')->final_balance;
        $percent = 0.86;
        
        $reward = $balance * $percent;
        
        return $reward;
    }
}

