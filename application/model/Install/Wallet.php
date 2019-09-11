<?php
namespace Lottobits\Application\Model\Install;

use Lottobits\Database\SqliteConnection;
use PDOException;

class Wallet extends SqliteConnection
{

    private $deposits;
    
    private $withdrawals;
    
    public function __construct()
    {
        $this->getData(require ROOT . '/db/databases.php');
        $this->wallet = $this->getSqliteConnection('wallet');
        
    }
    
    /**
     * 
     */
    public function deposits()
    {
        try{
            $this->deposits = "CREATE TABLE deposits (
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
    public function withdrawals()
    {
        try{
            $this->withdrawals = "CREATE TABLE withdrawals (
                id INTEGER PRIMARY KEY,
                nickname VARCHAR,
                hash_tx VARCHAR,
                value VARCHAR,
                bitcoin_address VARCHAR,
                datetime DATETIME
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
        $create->deposits()->withdrawals();
        
        $create->wallet->exec($create->deposits);
        $create->wallet->exec($create->withdrawals);
    }
    
    
}

