<?php
namespace Lottobits\Application\Model\Install;

use Lottobits\Database\SqliteConnection;
use PDOException;

class RollDice extends SqliteConnection
{

    private $balance;
    
    private $bets;
    
    private $withdrawals;
    
    public function __construct()
    {
        $this->getData(require ROOT . '/db/databases.php');
        $this->rollDice = $this->getSqliteConnection('games/roll-dice');
        
    }
    
    /**
     * 
     */
    public function balance()
    {
        try{
            $this->balance = "CREATE TABLE balance (
                id INTEGER PRIMARY KEY,
                nickname VARCHAR,
                hash_tx  VARCHAR,
                balance VARCHAR,
                bitcoin_address VARCHAR
            )";
            
        }catch (PDOException $e){
            sprintf($e->getMessage()) . '<p>';
        }
        
        return $this;
    }
    
    /**
     *
     */
    public function bets()
    {
        try{
            $this->bets = "CREATE TABLE bets (
                id INTEGER PRIMARY KEY,
                nickname VARCHAR,
                number VARCHAR,
                results VARCHAR,
                profit VARCHAR,
                bitcoin_address VARCHAR
            )";
            
        }catch (PDOException $e){
            sprintf($e->getMessage()) . '<p>';
        }
        
        return $this;
    }
    
    /**
     * 
     */
    public static function create()
    {
        $create = new self;
        $create->balance()->bets();
        
        $create->rollDice->exec($create->balance);
        $create->rollDice->exec($create->bets);
    }
    
    
}

